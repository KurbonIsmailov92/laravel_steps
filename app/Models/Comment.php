<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public function post()
    {
        return $this->belongsToMany(Post::class, 'post_comments', 'comment_id', 'post_id');
    }

}
