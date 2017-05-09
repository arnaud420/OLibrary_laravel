<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
  protected $table = "authors";

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

  public function exemplaires() {
    return $this->hasManyThrough('App\Exemplaires', 'App\Artworks',
    'authors_id', 'artworks_id', 'id');
  }
}
