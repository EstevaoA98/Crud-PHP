<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'location', 'private', 'date', 'items', 'image'];

    protected $casts = ['items' => 'array'];

    protected $dates = ['date'];

    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

