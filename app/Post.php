<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

     protected $fillable = ['title', 'body'];
    public function comments(){
      return $this->hasMany(Comment::class);
    }

    public function addComment($body){
      $this->comments()->create(compact('body'));
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public static function archives(){
      return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
      ->groupBy('year', 'month')
      ->orderByRaw('min(created_at) desc')
      ->get()->toArray();
    }
}
