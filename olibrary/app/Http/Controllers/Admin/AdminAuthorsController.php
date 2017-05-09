<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Authors;

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
            return view('back.artworks.create');
        }
    }
}
