<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exemplaires extends Model
{
  protected $fillable = [
    'exemplaire_quantity',
    'exemplaire_picture_path',
    'created_at',
    'updated_at'
  ];

  public function artwork() {
    return $this->belongsTo('App\Artworks');
  }
}
