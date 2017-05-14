<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
  protected $table = 'types';
  protected $fillable = [
    'type_name',
      'created_at',
      'updated_at'
  ];

  public function artworks() {
    return $this->hasMany('App\Artworks');
  }
}
