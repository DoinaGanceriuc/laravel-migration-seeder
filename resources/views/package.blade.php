@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="title text-center py-5">Pacchetti Viaggi</h1>
<div class="pacchetti_viaggi">
@foreach ($packages as $package)

<div class="card text-center my-5">
  <div class="card-body d-flex">
      <div class="col-6">
          <img class="w-100 h-100" src="{{$package->image}}" alt="">
      </div>
      <div class="col-6 p-5">
            <h3 class="card-title">{{$package->hotel}}</h3>
                <div class="info d-flex py-5 justify-content-between">
                    <p><strong>Posizione:</strong> {{$package->city}}</p>
                    <h5><strong>Prezzo:</strong> {{$package->price}}</h5>
                    <p><strong>Voto:</strong> <span class="vote">{{$package->vote}}</span></p>
                </div>
                <a href="{{route('single', ['single_package' => $package->id])}}" class="btn offer">Vedi offerta</a>
      </div>
  </div>
</div>
@endforeach
</div>
</div>



@endsection
