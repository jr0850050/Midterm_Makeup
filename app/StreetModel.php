<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StreetModel extends Model
{
    protected $fillable = [
        'type',
        'title',
        'published',
        'description'
    ];
}
