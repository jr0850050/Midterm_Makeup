<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'orderID';
    protected $fillable = [
    'customerID',
    'orderDate',
    'shipAmount',
    'taxAmount',
    'shipDate',
    'shipAddressID',
    'cardType',
    'cardNumber',
    'cardExpires',
    'billingAddressID',
    ];

     public function setCardNumberAttribute($value)
    {
        $this->attributes['cardNumber'] = '****************';
    }
    /*
    public function getCardNumberAttribute($value)
    {
        return Crypt::decryptString($value);
    } */
}
