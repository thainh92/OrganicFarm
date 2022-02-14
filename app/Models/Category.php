<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'create_at', 'update_at'
    ];

    public function product() {
        return $this->hasMany('App\Models\Product', 'id' ,'category_id');
    }
}
