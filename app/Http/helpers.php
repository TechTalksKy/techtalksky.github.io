<?php

/**
 * List date for meetups
 * @param  [type] $city      [description]
 * @param  [type] $dayOfWeek [description]
 * @param  [type] $month     [description]
 * @param  [type] $week      Zero based...0 = first occurence, 1 = second
 * @return [type]            [description]
 */
function meetupDate($city, $dayOfWeek, $month, $week)
{
    $date = \Carbon\Carbon::now()
        ->addMonths($month)
        ->firstOfMonth($dayOfWeek)
        ->addWeek($week);

    if (\Carbon\Carbon::now()->gt($date)) {
        return;
    }

    $date = $date->format('M d, Y');

    $selected = old('availability') == $date ? 'selected' : '';

    return view('partials.meetupDate', compact('date', 'city', 'selected'));
}
