<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExemplairesUser extends Model
{
  protected $table = 'exemplaires_user';

  protected $fillable = [
    'created_at',
  ];
}
