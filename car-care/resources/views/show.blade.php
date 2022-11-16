@extends('layouts.app')
@section('title','Autos')
@section('content')

<a class="btn btn-primary" href="/autos">Volver atras</a>


<div class="col-sm">

        <div class="card text_center" style="width: 18rem; margin-top: 70px;">
        <img style="height: 100px; width: 100px;
        background-color: #EFEFEF; margin: 20px;
        "class="card-img-top rounded-circle mx-auto d-block";
        src='../images/{{$auto->foto}}'alt="">;
  <div class="card-body">
    <h4 class="card-title"> "El vehiculo esta listo y con las reparaciones realizadas" </h4>
    <h5 class="card-title">{{$auto->marca}} {{$auto->modelo}} </h5>
    <h6 class="card-title">{{$auto->daño}} </h6>
    
    
    <p class="card-text">Taller Autoelectrico GARMAR</p>
    <a href="/delete/{{$auto->id}}" class="btn btn-primary">Borrar...</a>
    
    
  </div>
</div>
</div>

@endsection