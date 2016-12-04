<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    protected $guarded = [];
    
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
        return \Carbon\Carbon::parse($value)->format('M d, Y @ ga');
    }

    public function tweetDate()
    {
        return \Carbon\Carbon::parse(
            $this->getAttributes()['meetup_date']
        )->format('D M j');
    }

    public function url()
    {
        return config('app.url') . '/event/' . $this->slug;
    }
}
