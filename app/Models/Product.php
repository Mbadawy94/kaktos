<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
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

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
