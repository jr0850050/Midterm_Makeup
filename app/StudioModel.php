<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudioModel extends Model
{
    protected $fillable = [
        'type',
        'title',
        'published',
        'description'
    ];
}
