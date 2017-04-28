<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facade as Debugbar;

class LoginController extends Controller
{
  public function logout() {
    if (Auth::check()) {
      Auth::logout();
    }
    return redirect('/');
  }
}
