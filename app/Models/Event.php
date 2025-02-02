<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'location', 'private'];

    protected $casts = ['items' => 'array'];

    protected $dates = ['date'];
}

