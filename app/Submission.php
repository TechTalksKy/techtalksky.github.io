<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'title',
        'description',
        'author_name',
        'bio',
        'avatar',
        'email',
        'availability',
        'city',
        'body'
    ];
}
