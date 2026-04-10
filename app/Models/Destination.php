<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destination';

    protected $fillable = [
        'name',
        'description',
        'location',
        'working_day',
        'working_hour',
        'ticket_price',
    ];
}
