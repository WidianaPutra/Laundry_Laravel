<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionsModel extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['order_id', 'payment_method', 'payment_status', 'amount'];
}
