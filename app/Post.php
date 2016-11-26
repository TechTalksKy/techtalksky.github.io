<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'meetup_date',
        'created_at',
        'updated_at'
    ];

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    public function getMeetupDateAttribute($value)
    {
        // dd($value);
        return \Carbon\Carbon::parse($value)->format('M d, Y @ ga');
    }
}
