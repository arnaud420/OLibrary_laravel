<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyAuthority extends Model
{
  protected $fillable = [
    'family_name',
    'created_at',
    'updated_at'
  ];

  public function authoritys() {
    return $this->hasMany('App\Authoritys');
  }
}
