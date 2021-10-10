<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Liên kết với bảng User: 1-m
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Liên kết với bảng Like: 1-m
    public function likes(){
        return $this->hasmany(Like::class);
    }

    //Liên kết với bảng Comment: 1-m
    public function comments(){
        return $this->hasmany(Comment::class);
    }
}
