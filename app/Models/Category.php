<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category','slug','description','image','keywords'];

    public function course(){
        return $this->hasMany('App\Models\Course','category_id','id');
    }

    public function reviews(){
        return $this->hasMany('App\Models\Review','category_id','id');
    }
}
