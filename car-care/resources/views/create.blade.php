@extends('layouts.app')
@section('title', 'Autos Create')
@section('content')

<form class="form-group" method="POST" action="/autos" enctype="multipart/form-data" >
    @csrf
<div clas="form-group">
    <label for="">Marca:</label>
    <input type="text"  name="marca" class="form-control">
    <label for="">Modelo:</label>
    <input type="text"  name="modelo" class="form-control">
    <label for="">Daño:</label>
    <input type="text"  name="daño" class="form-control">
</div>
<div clas="form-group"  >
    <label for="">Foto:</label>
    <input type="file"  name="foto" class="form-control">
    </div>
<button type="submit"class="btn btn-primary">
    Guardar</button>
   
</form>

    <p>Listado de autos para reparación</p>
    <div class="row">
    @foreach ($autos as $auto)
    <div class="col-sm">
        <div class="card text_center" style="width: 18rem; margin-top: 70px;">
        <img style="height: 100px; width: 100px;
        background-color: #E80505; margin: 20px;
        "class="card-img-top rounded mx-auto d-block"
        src='images/{{$auto->foto}}'alt="">
  <div class="card-body">
    <h5 class="card-title">{{$auto->marca}} {{$auto->modelo}} {{$auto->daño}}</h5>
    
    <p class="card-text">Taller Autoelectrico GARMAR</p>
    <a href="/delete/{{$auto->id}}" class="btn btn-primary">Borrar...</a>
    <a href="/autos/{{$auto->id}}/edit" class="btn-btn-secondary">Editar... </a>
    <a href="/autos/{{$auto->id}}" class="btn btn-secondary"> Entregar... </a>
  </div>
</div>
</div>
@endforeach
@endsection

    




