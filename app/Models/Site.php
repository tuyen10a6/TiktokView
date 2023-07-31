<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $table = 'sites';

    protected $primaryKey = 'id';

    protected $filltable = [
        'user_id',
        'theme_id',
        'name',
        'email',
        'phone',
        'code',
        'config',
        'slug',
        'description',
        'status'
    ];

    protected $casts = [
        'config' => 'object',
    ];

    public function categories()
    {
        return $this->hasMany(Category:: class);
    }
    public function products()
    {
        return $this->hasMany(Product:: class);
    }
}