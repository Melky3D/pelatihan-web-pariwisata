<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $table = 'attractions';

    protected $fillable = [
        'name',
        'description',
    ];
}
