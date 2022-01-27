<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = ['title','img','html'];
    protected $dates = ['created_at', 'updated_at'];

//    public function replies()
//    {
//        return $this->hasMany('App\Comment', 'id', 'reply_id');
//    }

    public function comments(){
        return $this->hasMany(Comments::class,'id','blog_id');
    }
}
