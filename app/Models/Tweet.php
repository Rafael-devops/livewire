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
}
