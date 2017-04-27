<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artworks extends Model
{
  protected $fillable = [
    'artwork_title',
    'artwork_date',
    'resume',
    'collection',
    'created_at',
    'updated_at'
  ];

  public function author() {
    return $this->belongsTo('App\Authors');
  }

  public function type() {
    return $this->belongsTo('App\Types');
  }

  public function authority() {
    return $this->belongsTo('App\Authoritys');
  }

  public function exemplaires() {
    return $this->hasMany('App\Exemplaires');
  }
}
