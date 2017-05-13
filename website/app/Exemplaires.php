<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exemplaires extends Model
{
  protected $table = 'exemplaires';
  protected $fillable = [
    'exemplaire_quantity',
    'exemplaire_picture_path',
    'created_at',
    'updated_at',
    'artwork_id'
  ];

  public function artwork() {
    return $this->belongsTo('App\Artworks', 'artworks_id', 'id');
  }

  public function users() {
    return $this->belongsToMany(User::class)->withTimestamps();
  }
 }
