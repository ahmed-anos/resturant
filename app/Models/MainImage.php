<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainImage extends Model
{
    use HasFactory;
    protected $fillable=[
        'banner_image',
        'about_image',
        'menu_image',
        'reservation_image'
    ];
}
