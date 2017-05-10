<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Authors;
use App\Types;
use App\Authoritys;

class AdminAuthorsController extends Controller
{
    public function create()
    {
        return view('back.author.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $create = Authors::create($input);

        if ($create)
        {
            $authors = Authors::orderBy('last_name')->get();
            $types = Types::orderBy('type_theme')->get();
            $authorities = Authoritys::orderBy('authority_name')->get();
            return view('back.artworks.create', compact('authors', 'types', 'authorities'));
        }
    }
}
