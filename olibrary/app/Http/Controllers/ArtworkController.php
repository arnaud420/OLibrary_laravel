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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function borrow(Request $request, $id) {
      if (!Auth::check()) {
        return Response()->json([
          'message' => 'Pas connecté'
        ], 400);
      } else {
        $userId = Auth::user()->id;
        $exemplaireId = $id;

        $exemplaireQuantity = Exemplaires::findOrFail($id)->exemplaire_quantity;
        $exemplaireInRest = Borrows::where('exemplaire_id', $id)->count();
        $exemplaireInStock = false;
        $usrCanBrrw = false;

        return Response()->json([
          'message' => 'Borrow success: ',
          'userId' => $userId,
          'exemplaireId' => $exemplaireId,
          'isLogged' => Auth::check(),
          'exemplaireInRest' => $exemplaireInRest,
          'exemplaireQuantity' => $exemplaireQuantity,
          'exemplaireInStock' => $exemplaireInStock,
          'usrCanBrrw' => $usrCanBrrw
        ]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
