<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
  protected $table = 'borrows';

  protected $fillable = [
    'borrow_return_date',
    'rate',
    'created_at',
    'updated_at'
  ];

}
