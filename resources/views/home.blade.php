@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="title">Agenzia Viaggi</h1>
<div class="travels">
@forelse ($travels as $travel)

            <div class="info_voyage">
                <h2>Info Voli</h2>
                <p>{{$travel->time}}</p>
                <p>{{$travel->stopover}}</p>
                <p>{{$travel->duration}}</p>
            </div>

@empty
<p> No travel found</p>

@endforelse
</div>
</div>



@endsection
