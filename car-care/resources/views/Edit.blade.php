@extends('layouts.app')
@section('title', 'Autos Edit')
@section('content')
<form class="form-group" method="POST" action="{{action('AutoController@update', $auto->id)}}" enctype="multipart/form-data" >
    @method('PUT')
    @csrf
<div clas="form-group">
    <label for="">Marca:</label>
    <input type="text"  name="marca" value ="{{$auto->marca}}" class="form-control">
    <label for="">Modelo:</label>
    <input type="text"  name="modelo" value ="{{$auto->modelo}}"class="form-control">
    <label for="">Daño:</label>
    <input type="text"  name="daño" value ="{{$auto->daño}}"class="form-control">
</div>
<div clas="form-group"  >
    <label for="">Foto:</label>
    <input type="file"  name="foto" value ="{{$auto->foto}}" >
    </div>
<button type="submit"class="btn btn-primary">
    Editar </button>
</form>

@endsection