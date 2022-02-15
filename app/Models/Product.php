<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'thumbnail',
        'description',
        'category_id',
        'discount_id',
        'price',
        'status',
        'create_at',
        'update_at'
    ];
}
