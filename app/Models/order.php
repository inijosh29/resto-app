<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'order_code',
        'user_id',
        'subtotal',
        'tax',
        'total',
        'status',
        'table_number',
        'payment_method',
        'note',
        'created_at',
        'updated_at'
    ];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->blongsTo(User::class, 'user_id');
    }

    public function orderItems()
    {
        return $this->hasMany(Order_Item::class, 'order_id');
    }
}
