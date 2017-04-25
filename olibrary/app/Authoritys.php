<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authoritys extends Model
{
  protected $fillable = [
    'authority_name',
    'authority_email',
    'authority_phone',
    'created_at',
    'updated_at'
  ];
}
