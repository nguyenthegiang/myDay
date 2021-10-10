<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    //Liên kết với bảng User: 1-m
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Liên kết với bảng Post: 1-m
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
