<?php

namespace App;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'users';

    protected $fillable = [
      'username',
      'email',
      'password',
      'firstname',
    ];

    protected $hidden = [
      'password',
      'remember_token',
    ];

    public function getName()
    {
        if ($this->firstname) {
          return $this->firstname;
        }

        return null;
    }


    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->username;
    }
    
    public function getUsernameOrFirstname()
    {
        return $this->username ?: $this->firstname;
    }

    public function posts()
    {
      return $this->hasMany(Post::class);
    }

    public function comment()
    {
      return $this->hasMany(Comment::class);
    }
}
