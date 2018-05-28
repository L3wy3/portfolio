<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
=======

    public function posts()
    {
      return $this->hasmany(Post::class);
    }
    public function setPasswordAttribute($password)
    {
    $this->attributes['password'] = bcrypt($password);
    }
    public function publish(Post $post){
      $this->posts()->save($post);
      // Post::create([
      //   'title' => request('title'),
      //   'body' => request('body'),
      //   'user_id' => auh()->id()
      // ]);
    }
>>>>>>> 2143ba06f1d493ead94ad48002ac6e5daf5a15b6
}
