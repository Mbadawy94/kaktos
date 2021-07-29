<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'price',
        'quantity',
        'description',
        'category_id',
    ];

      public static function boot()
    {
        parent::boot();

        static::creating(function($product){
            $product->slug = Str::slug($product->title);
        });
    }

    public function getImageUrlAttribute()
    {
        return url($this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
