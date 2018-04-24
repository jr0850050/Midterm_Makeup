<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NatureModel extends Model
{
    protected $fillable = [
        'type',
        'title',
        'published',
        'description'
    ];
}
