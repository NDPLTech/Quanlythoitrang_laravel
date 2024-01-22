<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $primaryKey = 'order_details_id';
    protected $guarded = [];

    public function order(){
        return $this->belongsTo(order::class,'order_id','order_details_id');
    }

    public function product(){
        return $this->belongsTo(product::class,'product_id','order_details_id');
    }
}
