<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'name',
        'image_url',
        'image',
        'img_alt_text',
        'url',
        'price',
        'short_description',
        'long_description'
    ];

    protected $casts = [
        'name' => 'string',
        'image_url' => 'string',
        'image' => 'string',
        'img_alt_text' => 'string',
        'url' => 'string',
        'price' => 'string',
        'short_description' => 'string',
        'long_description' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:65535',
        'image_url' => 'nullable|string|max:65535',
        'image' => 'nullable|string|max:255',
        'img_alt_text' => 'nullable|string|max:255',
        'url' => 'nullable|string|max:65535',
        'price' => 'nullable|string|max:255',
        'short_description' => 'nullable|string|max:65535',
        'long_description' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
