@extends('layouts.app')

@section('content')

<div class="container text-center">
<h1 class="title py-5">Agenzia Viaggi</h1>
<h2>Benvenuto! Trova un volo flessibile per il tuo prossimo viaggio.</h2>
<div class="render py-5">
    <a class="btn package me-3" href="{{ route('package') }}">Packages</a>
    <a class="btn flight me-3" href="{{ route('flight') }}">Flights</a>
    <a class="btn news" href="{{ route('news') }}">News</a>
</div>
</div>



@endsection
