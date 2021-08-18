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
        'oldPrice',
        'quantity',
        'description',
        'category_id',
        'important',
        'new',
        'sale',
        'popular',
    ];

      public static function boot()
    {
        parent::boot();

        static::creating(function($product){
            $product->slug = Str::slug($product->title);
        });
    }

    public function scopeImportant($query)
    {
        return $query->where('important', true);
    }

    public function scopeNew($query)
    {
        return $query->where('new', true);
    }

    public function scopeSale($query)
    {
        return $query->where('sale', true);
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
