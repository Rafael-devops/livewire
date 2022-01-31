<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'user_id'];

    public function user (){
        //retorna o autor do tweet
        return $this->belongsTo(User::class);
    }

    public function likes(){
        //retorna o autor do tweet
        return $this->hasMany(Like::class)
        ->where(function($query){
            if(auth()->check()){
                $query->where('user_id', auth()->user()->id());
            }
        }); 
    }
}
