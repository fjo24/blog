<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','type'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

        public function articles()
    {
        return $this->hasMany('App\Article');
    }
        public function scopeSearch($query, $data){
      $name= $data->name;
      $email= $data->email;
      $type= $data->type;
      return $query->where('name', 'LIKE', "%$name%")-> where('email', 'LIKE', "%$email%")-> where('type', 'LIKE', "%$type%");
    }
}
