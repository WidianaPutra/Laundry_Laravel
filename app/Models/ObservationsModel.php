<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObservationsModel extends Model
{
    protected $table = 'observations';
    protected $fillable = ['user_id', 'items_count', 'order_id', 'status', 'time'];
}
