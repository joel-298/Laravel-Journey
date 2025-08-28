<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];
}






// php artisan make:model Post -m
// Post.php will be created inside app/Models/.
// The -m flag creates a migration file in database/migrations/ automatically.

