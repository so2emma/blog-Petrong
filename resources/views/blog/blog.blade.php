@extends('layouts.frontend')

@section('content')

  <!-- Get the current Template -->
  @php
  $temp = \App\Models\Settings::template_is();
  @endphp

  <!-- include based on the Template -->
  @include('blog.'.$temp.'.blog')
@endsection