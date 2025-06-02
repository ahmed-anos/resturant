<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'logo',
        'email',
        'phone',
        'description',
        'about_desc_first',
        'about_desc_second',
        'social_links',
    ];

    protected $casts=[
        'phone'=>'array',
        'social_links'=>'array',
        
    ];
}
