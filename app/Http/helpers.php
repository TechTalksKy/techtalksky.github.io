<?php

/**
 * List date for meetups
 * @param $city
 * @param $dayOfWeek
 * @param $month
 * @param $week
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void [type]            [description]
 * @internal param $ [type] $city      [description]
 * @internal param $ [type] $dayOfWeek [description]
 * @internal param $ [type] $month     [description]
 * @internal param $ [type] $week      Zero based...0 = first occurence, 1 = second
 */
function meetupDate($city, $dayOfWeek, $month, $week)
{
    $date = \Carbon\Carbon::now()
        ->addWeek(1)
        ->addDay(1);

//    if (\Carbon\Carbon::now()->gt($date)) {
//        return;
//    }

    $date = $date->format('M d, Y');

    $selected = old('availability') == $date ? 'selected' : '';

    return view('partials.meetupDate', compact('date', 'city', 'selected'));
}
