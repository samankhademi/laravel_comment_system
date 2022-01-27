<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = ['username','text', 'reply_id', 'blog_id'];
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Get the comments associated with the user.
     */
    public function blog_id(){
        return $this->hasOne(\Blogs::class);
    }
    public function blog(){
        return $this->belongsTo(Blogs::class, 'blog_id', 'id');
    }

    /**
     * Get the comments associated with the user.
     */
    public function username(){
        return $this->hasOne(\User::class);
    }
}
