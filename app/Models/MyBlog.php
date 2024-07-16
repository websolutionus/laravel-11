<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBlog extends Model
{
    use HasFactory;

    protected $table = "blogs";

    function scopeActive($query) {
        return $query->where('status', 1);
    }
}
