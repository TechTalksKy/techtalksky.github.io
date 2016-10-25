<?php

function meetupDate($city, $dayOfWeek, $month)
{
    $date = \Carbon\Carbon::now()
        ->addMonths($month)
        ->firstOfMonth($dayOfWeek)
        ->addWeek(1);

    if (\Carbon\Carbon::now()->gt($date)) {
        return;
    }

    $date = $date->format('M d, Y');

    $selected = old('availability') == $date ? 'selected' : '';

    return view('partials.meetupDate', compact('date', 'city', 'selected'));
}
