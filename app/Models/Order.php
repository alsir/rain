<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'costumer_name',
        'costumer_number',
        'address',
        'order_status',
        'note',
        'total'
    ];
    public function coupon()
    {
        return $this->hasone(Coupon::class , 'id','coupon_id');
    }
}
