<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artworks extends Model
{
  protected $table ='artworks';

  protected $fillable = [
    'artwork_title',
    'artwork_date',
    'resume',
    'collection',
    'created_at',
    'author_id',
    'updated_at'
  ];

  public function author() {
    return $this->belongsTo('App\Authors', 'authors_id', 'id');
  }

  public function exemplaires() {
    return $this->hasMany('App\Exemplaires');
  }

  public function type() {
    return $this->belongsTo('App\Types', 'types_id', 'id');
  }

  public function authority() {
    return $this->belongsTo('App\Authoritys', 'authorities_id', 'id');
  }
}
