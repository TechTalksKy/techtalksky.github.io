<?php $date = \Carbon\Carbon::now()
        ->addMonths($i)
        ->firstOfMonth(3)
        ->addWeek(1)
        ->format('M d, Y'); ?>
<option
    value="{{ $date }}"
    @if (old('availability') == $date)
        selected
    @endif
>Lexington: {{ $date }}</option>
