@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="title">Pacchetti Viaggi</h1>
<div class="pacchetti_viaggi">
@foreach ($packages as $package)

            <div class="info_voyage">
                <h2>Info Voli</h2>
                <p>{{$package->city}}</p>
                <p>{{$package->hotel}}</p>
                <p>{{$package->price}}</p>
                 <p>{{$package->vote}}</p>
            </div>



@endforeach
</div>
</div>



@endsection
