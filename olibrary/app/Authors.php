<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
  protected $fillable = [
    'last_name',
    'first_name',
    'birth_date',
    'nationality',
    'created_at',
    'updated_at'
  ];

  public function artworks() {
    return $this->hasMany('App\Artworks');
  }
}
