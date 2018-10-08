<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_title','subject', 'article', 'author',  'author_email',
    ];
}
