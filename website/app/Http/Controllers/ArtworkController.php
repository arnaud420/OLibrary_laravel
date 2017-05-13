<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Authors;
use App\Artworks;
use App\Exemplaires;
use App\Borrows;
use Illuminate\Support\Facades\Auth;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $artworks = Artworks::paginate(16);
      $artworks->load('author');
      $artworks->load('exemplaires');
      return view('layouts.catalog', ['artworks' => $artworks]);
    }

    public function borrow(Request $request, $id) {
      if (!Auth::check()) {
        return Response()->json([
          'message' => 'Pas connecté'
        ], 400);
      } else {
        $userId = Auth::user()->id;
        $exemplaireId = $id;

        $user = User::find($userId);
        $exemplaireToBorrow = Exemplaires::find($exemplaireId);

        foreach($user->exemplaires as $exemplaire) {
          if ($exemplaire->id == $exemplaireId) {
            return Response()->json([
              'message' => 'Exemplaire déjà emprunter.'
            ]);
          }
        }
        if ($exemplaireToBorrow->exemplaire_quantity <= count($exemplaireToBorrow->users)) {
          return Response()->json([
            'message' => 'Plus d\'exemplaires disponibles.'
          ]);
        } else {
          $user->exemplaires()->attach($exemplaireId);

          return Response()->json([
            'message' => 'Emprunt reussi.',
          ]);
        }
      }
    }

    public function getExemplaires(Request $request) {
      if ($request->ajax()) {

        $artwork = Artworks::findOrFail($request->id);
        $artwork->load('exemplaires');

        return Response()->json([
          'exemplaires' => $artwork->exemplaires
        ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artwork = Artworks::findOrFail($id);
        $artwork->load('author');
        $artwork->load('exemplaires');
        return view('artworks.show', ['artwork' => $artwork]);
    }

    public function searchAll(Request $request) {
      $value = $request->input('value');
      $results = Artworks::
        where('artwork_title', 'LIKE', '%'.$value.'%')
        ->orWhere('resume', 'LIKE', '%'.$value.'%')
        ->get();
      return view('artworks.searchResults', ['results' => $results]);
    }
}
