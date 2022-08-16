@props(['status' => 'info'])

@php
if (session('status') === 'info') {
    $bgColor = 'bg-blue-500';
}
if (session('status') === 'alert') {
    $bgColor = 'bg-red-500';
}
@endphp

@if (session('message'))
  <div class="{{ $bgColor }} w-1/2 mx-auto mb-4 p-2 rounded text-white text-center">
    {{ session('message') }}
  </div>
@endif
