<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'attraction_id',
        'name',
        'comment',
    ];

    public function attraction()
    {
        return $this->belongsTo(Attraction::class);
    }

}
