<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'seo_title',
        'summary',
        'keywords',
        'slug',
        'extra_seo',
        'status'
    ];
}
