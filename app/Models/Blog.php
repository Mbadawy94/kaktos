<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'excerpt',
        'body',
        'category_id',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
     public function tags()
        {
            return $this->hasMany(Tag::class);
        }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
