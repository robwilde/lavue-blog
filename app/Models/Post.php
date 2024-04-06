<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'title',
        'slug',
        'body',
        'teaser',
        'is_published',
    ];

    public static function booted(): void
    {
        static::creating(function ($post) {
            $post->uuid = Str::uuid();
            $post->slug = \Illuminate\Support\Str::slug($post->title);
        });
    }
}
