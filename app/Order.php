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
    'shipAddressID',
    'cardType',
    'cardNumber',
    'cardExpires',
    'billingAddressID',
    ];
}
