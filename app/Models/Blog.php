<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'excerpt',
        'body',
        'category_id',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function($blog){
            $blog->slug = Str::slug($blog->title);
        });
    }

    public function getImageUrlAttribute()
    {
        return url($this->image);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
     public function tags()
        {
            return $this->hasMany(Tag::class);
        }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
