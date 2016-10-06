<?php $date = \Carbon\Carbon::now()
        ->addMonths($i)
        ->firstOfMonth(2)
        ->addWeek(1)
        ->format('M d, Y'); ?>
<option
    value="{{ $date }}"
    @if (old('availability') == $date)
        selected
    @endif
>Louisville: {{ $date }}</option>
