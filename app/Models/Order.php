<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'order_number', 'user_id', 'status', 'grand_total', 'item_count', 'payment_status', 'payment_method', 'country',
        'first_name', 'last_name', 'company_name', 'address', 'city', 'state', 'zip', 'phone', 'email', 'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function items()
    {
        return $this->hasMany(OrderDetails::class);
    }
}
