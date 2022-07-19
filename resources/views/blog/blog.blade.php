@extends('layouts.frontend')
@section('content')
@php
$temp = \App\Models\Settings::template_is();
@endphp
@include('blog.'.$temp.'.blog')
@endsection