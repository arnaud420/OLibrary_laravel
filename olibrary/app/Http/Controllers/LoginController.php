<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facade as Debugbar;

class LoginController extends Controller
{
  public function index() {
    Debugbar::info(Auth::check());
    if (Auth::check()) {
      return redirect('/');
    } else {
      return view('user.login');
    }
  }

  public function login(Request $request) {
    Debugbar::info($request);
  }
}
