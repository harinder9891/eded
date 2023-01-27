<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterFormData extends Model
{
    use HasFactory;
    protected $table='footerformdata';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'service',
        'budget',
        'pagename',
        
    ];
}
