<?php

namespace App\Http\Controllers\Admin;

use App\Artworks;
use App\Exemplaires;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminExemplairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $artwork = Artworks::findOrFail($id);
        return view('back.exemplaires.create', compact('artwork'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if ($request->hasFile('exemplaire_picture_path'))
        {
            $image = $request->file('exemplaire_picture_path');
            $filename = '/uploads/' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400,611)->save(public_path($filename));
            $exemplaire = new Exemplaires;
            $artworks_id = Artworks::find($request->get('artworks_id'));

            $exemplaire->exemplaire_name = $request->get('exemplaire_name');
            $exemplaire->exemplaire_quantity = $request->get('exemplaire_quantity');
            $exemplaire->exemplaire_picture_path = $filename;
            $exemplaire->artwork()->associate($artworks_id);
            $exemplaire->save();

            $artwork = Artworks::findOrFail($id);
            return redirect(route("adminartworks.show", $id))->withOk("success", "l'utilisateur a ete cree");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($exemplaire_id, $artwork_id)
    {
        //
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
