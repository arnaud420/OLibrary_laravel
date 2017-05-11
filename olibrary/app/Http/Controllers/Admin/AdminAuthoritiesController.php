<?php

namespace App\Http\Controllers\Admin;

use App\Authoritys;
use App\FamilyAuthority;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuthoritiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorities = Authoritys::paginate(6);
        $families = $authorities->load('familyAuthority');
        return view('back.authorities.index', compact('authorities', 'families'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $families = FamilyAuthority::all();
        return view('back.authorities.create', compact('families'));
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
        $familie = FamilyAuthority::find($input['families_id'])->authoritys()->create([
           'authority_name' => $input['authority_name'],
            'authority_email' => $input['authority_email'],
            'authority_phone' => $input['authority_phone'],
            'families_id' => $input['families_id']
        ]);
        $familie->save();

        return redirect(route("adminauthorities.create"))->with("success", "l'utilisateur a ete cree");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $authoritie = Authoritys::findOrFail($id);
        return view('back.authorities.edit', compact('authoritie'));
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
        $input = $request->all();
        $authoritie = Authoritys::findOrFail($id);
        $authoritie_update = $authoritie->update($input);

        if ($authoritie_update)
        {
            return redirect(route("adminauthorities.index"))->with("success", "l'autorité a bien ete modifié");
        }
        else
        {
            return redirect()->back()->with("danger", "l'autorité n a pas ete modifié");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Authoritys::destroy($id);
        if ($count == 1) {
            return redirect(route("adminauthorities.index"))->with("success", "l'autorité a bien ete supprime");
        }

        else {
            return redirect()->back()->with("danger", "l'autorité n a pas ete supprime");
        }
    }
}
