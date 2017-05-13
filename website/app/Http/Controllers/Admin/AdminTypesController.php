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
        if ($create)
        {
            return redirect(route("admin"))->with("success", "le type d'oeuvre a ete cree");
        }
        else
        {
            return redirect(route("admintype.create"))->with("danger", "erreur le type d'oeuvre n'a pas ete cree");
        }
    }
}
