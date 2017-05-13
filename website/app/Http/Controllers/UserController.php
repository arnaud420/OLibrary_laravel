<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facade as Debugbar;
use App\User;
use App\Artworks;

class UserController extends Controller
{
  public function index($id) {
    return view('user.profile', ['user' => Auth::user()]);
  }

  public function edit($id)
  {
    $user = User::findOrFail($id);
    return view('user.edit', compact('user'));
  }

  public function update(Request $request, $id)
  {
    $input = $request->all();
    $user = User::findOrFail($id);
    $user_update = $user->update($input);

    if ($user_update) {
      return redirect('/user/{id}');
    }
    else {
      return redirect()->back();
    }
  }

  public function borrows() {
    $user = User::findOrFail(Auth::user()->id);
    foreach($user->exemplaires as $exemplaire) {
      $exemplaire->artwork = Artworks::find($exemplaire->artworks_id);
    }
    return view('user.borrows', ['borrows' => $user->exemplaires]);
  }
}
