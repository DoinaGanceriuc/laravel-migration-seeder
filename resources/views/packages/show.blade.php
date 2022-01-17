@extends('layouts.app')

@section('content')

<div class="container">
<div class="pacchetti_viaggi">


<div class="card text-center my-5">
  <div class="card-body d-flex">
      <div class="col-6">
          <img class="w-100 h-100" src="{{$single_package->image}}" alt="">
      </div>
      <div class="col-6 p-5">
            <h3 class="card-title">{{$single_package->hotel}}</h3>
                <div class="info py-5">
                    <h5><strong>Prezzo:</strong> {{$single_package->price}}</h5>
                </div>
      </div>
  </div>
</div>
</div>
</div>



@endsection
