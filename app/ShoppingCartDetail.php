<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCartDetail extends Model
{
    protected $table = 'shopping_cart_details';
    protected $fillable = ['shopping_cart_id', 'product_name', 'product_size', 'product_color', 'unit_price', 'quantity', 'discount', 'tax', 'subtotal', 'created_at', 'updated_at'];

    public function shoppingCart()
    {
        return $this->belongsTo(ShoppingCart::class, 'shopping_cart_id', 'id');
    }
}
