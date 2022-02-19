@props(['status' => 'info'])

@php
<<<<<<< HEAD
if(session('status') === 'info'){$bgColor = 'bg-blue-300';}
if(session('status') === 'alert'){$bgColor = 'bg-red-500';}
=======
if($status === 'info'){$bgColor = 'bg-blue-300';}
if($status === 'error'){$bgColor = 'bg-red-500';}
>>>>>>> origin/main
@endphp

@if(session('message'))
  <div class="{{ $bgColor }} w-1/2 mx-auto p-2 text-white">
    {{ session('message' )}}
  </div>
@endif
