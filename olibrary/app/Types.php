<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
  protected $table = 'types';
  protected $fillable = [
    'type_name',
    'type_theme'
  ];

  public function artworks() {
    return $this->hasMany('App\Artworks');
  }
}
