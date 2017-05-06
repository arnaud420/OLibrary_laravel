<?php

namespace App\Http\Controllers\Admin;

use App\Artworks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminArtworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = Artworks::paginate(6);
        $authors = $artworks->load('author');
        return view('back.artworks.index', compact('artworks', 'authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
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
        $author = $artwork->load('author');
        //$exemplaire = $artwork->load('exemplaires');
        $type = $artwork->load('type');
        $authority = $artwork->load('authority');
        return view('back.artworks.show', compact('artwork', 'author', 'type', 'authority'));
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
        $count = Artworks::destroy($id);
        if ($count == 1) {
            return redirect(route("adminartworks.index"))->with("success", "l'oeuvre a bien ete supprime");
        }

        else {
            return redirect()->back()->with("danger", "l'oeuvre n a pas ete supprime");
        }
    }
}
