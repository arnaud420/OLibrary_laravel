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
    //
}
