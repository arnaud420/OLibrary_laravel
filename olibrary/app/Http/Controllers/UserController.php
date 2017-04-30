<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facade as Debugbar;

class UserController extends Controller
{
  public function index($id) {
    return view('user.profile', ['user' => Auth::user()]);
  }
}
