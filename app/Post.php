<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'body', 'space_id'];

    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    public function space()
    {
        return $this->belongsTo(Space::class);
    }
}
