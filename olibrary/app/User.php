<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 
      'email', 
      'password',
      'first_name',
      'last_name',
      'phone',
      'address',
      'postal_code',
      'city',
      'picture_path',
        'admin',
      'created_at',
      'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function borrows() {
      return $this->belongsToMany('Borrows', 'Exemplaires');
    }

     public function setPasswordAttribute($value)
     {
         $this->attributes["password"] = bcrypt($value);
     }
}
