@props(['lengthCsv'])

@php
  $hours = floor($lengthCsv / 60);
  $minutes = $lengthCsv % 60;
  $formattedLength = $hours.'h'.$minutes.'m';
@endphp

<div>
  <p>
    <a href="/?length={{ $lengthCsv }}">{{ $formattedLength }}</a>
  </p>
</div>

