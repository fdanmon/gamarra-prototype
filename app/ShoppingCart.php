<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shopping_carts';
    protected $fillable = ['sale_id', 'total_tax', 'total_discount', 'total_price', 'subtotal', 'total', 'created_at', 'updated_at'];

    public function shoppingCartDetails()
    {
        return $this->hasMany(ShoppingCartDetail::class, 'shopping_cart_id', 'id');
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }
}
