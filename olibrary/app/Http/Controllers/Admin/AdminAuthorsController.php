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
            $authors = Authors::All();
            $types = Types::All();
            $authorities = Authoritys::All();
            return view('back.artworks.create', compact('authors', 'types', 'authorities'));
        }
    }
}
