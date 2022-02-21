<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'thumbnail',
        'description',
        'category_id',
        'parent_category_id',
        'discount_id',
        'price',
        'status',
        'create_at',
        'update_at'
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
