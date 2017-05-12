<?php

namespace App\Http\Controllers\Admin;

use App\Artworks;
use App\Authoritys;
use App\Authors;
use App\Types;
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
        $authors = Authors::orderBy('last_name')->get();
        $types = Types::orderBy('type_name')->get();
        $authorities = Authoritys::orderBy('authority_name')->get();
        return view('back.artworks.create', compact('authors', 'types', 'authorities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artwork = New Artworks;
        $type = Types::find($request->get('types_id'));
        $authoritie = Authoritys::find($request->get('authorities_id'));
        $author = Authors::find($request->get('authors_id'));

        $artwork->artwork_title = $request->get('artwork_title');
        $artwork->resume = $request->get('resume');
        $artwork->collection = $request->get('collection');
        $artwork->artwork_date = $request->get('artwork_date');
        $artwork->author()->associate($author);
        $artwork->type()->associate($type);
        $artwork->authority()->associate($authoritie);
        $artwork->save();

        \Session::flash('flash_artwork', "Oeuvre ajouté avec succès");
        return redirect(route("admin"));
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
        $exemplaire = $artwork->load('exemplaires');
        $type = $artwork->load('type');
        $authority = $artwork->load('authority');
        return view('back.artworks.show', compact('artwork', 'author', 'type', 'authority', 'exemplaire'));
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
