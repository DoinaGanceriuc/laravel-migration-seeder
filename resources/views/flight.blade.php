@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="title text-center py-5">Info Voli</h1>
<div class="row">
@forelse ($travels as $travel)
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">{{$travel->city}}</h5>
        <div class="info_voyage py-3">
                <p><strong>Orario di partenza:</strong> {{$travel->time}}</p>
                <p><strong>Compagnia aerea:</strong> {{$travel->airline_company}}</p>
                <p><strong>Scali:</strong> {{$travel->stopover}}</p>
                <p><strong>Durata volo:</strong> {{$travel->duration}}</p>
            </div>
      </div>
    </div>
  </div>



@empty
<p> No travel found</p>

@endforelse
</div>
</div>
</div>



@endsection
