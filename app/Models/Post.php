<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    protected $fillable = ['title', 'city', 'content', 'image'];
    use HasFactory;

    // Define the relationship with the Comment model
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

