<?php

namespace App\Http\Controllers\Admin;

use App\Types;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTypesController extends Controller
{
    public function create()
    {
        return view('back.type.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $create = Types::create($input);
        \Session::flash('flash_type', "Genre ajouté avec succès");
        if ($create)
        {
            return redirect(route("admin"));
        }
        else
        {
            return redirect(route("admintype.create"))->with("danger", "erreur le type d'oeuvre n'a pas ete cree");
        }
    }
}
