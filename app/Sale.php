<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = ['client_name', 'client_document_number', 'client_email', 'client_phone', 'status', 'created_at', 'updated_at'];
    // status: 0: for delivering; 1: delivered;

    public function shoppingCart()
    {
        return $this->hasOne(ShoppingCart::class, 'sale_id', 'id');
    }
}
