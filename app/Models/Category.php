<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = [
        'create_at',
        'update_at',
        'thumbnail',
        'code',
        'name',
        'parent_id',
        'url'
    ];

    public function product() {
        return $this->hasMany('App\Models\Product', 'id' ,'category_id');
    }

}
