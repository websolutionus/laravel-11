<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name'];

    function user() {
       return $this->belongsTo(User::class);
    }

    function tags() {
        return $this->belongsToMany(Tag::class);
    }

    function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
}
