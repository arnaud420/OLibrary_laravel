<?php

namespace App\Http\Controllers\Admin;

use App\FamilyAuthority;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminFamilyAuthoritiesController extends Controller
{
    public function create()
    {
        return view('back.familyAuthoritie.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $create = FamilyAuthority::create($input);
        if ($create)
        {
            return redirect(route("admin"))->with("success", "la famille d'autorité a ete cree");
        }
        else
        {
            return redirect(route("adminfamilyauthoritie.create"))->with("danger", "erreur la famille d'autorité n'a pas ete cree");
        }
    }
}
