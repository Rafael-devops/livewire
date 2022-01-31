<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable=['user_id', 'tweet_id'];


    public function user()
    {
        return $this->belongTo(User_id::class);
    }

    public function tweet()
    {
        return $this->belongTo(Tweet::class);
    }
}
