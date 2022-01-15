@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="title text-center py-5">Pacchetti Viaggi</h1>
<div class="pacchetti_viaggi">
@foreach ($packages as $package)

<div class="card text-center my-5">
  <div class="card-body">
    <h3 class="card-title">{{$package->hotel}}</h3>
    <div class="card-text d-flex py-3">
        <div class="col-4">
            <p><strong>Posizione:</strong> {{$package->city}}</p>
        </div>
        <div class="col-4">
            <h5><strong>Prezzo:</strong> {{$package->price}}</h5>
        </div>
        <div class="col-4">
            <p><strong>Voto:</strong> <span class="vote">{{$package->vote}}</span></p>
        </div>
    </div>
    <a href="#" class="btn offer">Vedi offerta</a>
  </div>
</div>

            <div class="info_voyage">

            </div>



@endforeach
</div>
</div>



@endsection
