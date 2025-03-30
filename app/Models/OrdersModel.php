<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = ['uid', 'user_id', 'username', 'order_status', 'total_weight', 'transaction_id'];
}
