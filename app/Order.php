<?php

namespace App;

use Illuminate\Support\Facade\Crypt;
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

/*     public function setCardNumberAttribute($value)
    {
        $this->attributes['cardNumber'] = Crypt::encryptString($value);
    }

    public function getCardNumberAttribute($value)
    {
        return Crypt::decryptString($value);
    } */
}
