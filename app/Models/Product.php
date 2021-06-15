<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = [];

    public function leagues() {
        return $this->belongsTo(League::class, 'league_id', 'id');
    }

    public function order_details() {
        return $this->hasMany(OrderDetail::class, 'product_id','id');
    }
}
