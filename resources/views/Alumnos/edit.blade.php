@extends('plantillas/plantilla2')
 
@section('contenido1')
 
    @include('Alumnos/tablahtml')
   
@endsection
 
@section('contenido2')
 
<h1>EDITANDO</h1>
<form action="{{route('Alumnos.update',$alumno->id)}}" method="get">
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$alumno->nombre}}">
      </div>
    </div>
 
    <div class="row mb-3">
        <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidop" name="apellidop" value="{{$alumno->apellidop}}">
        </div>
      </div>
 
      <div class="row mb-3">
        <label for="correo" class="col-sm-3 col-form-label">correo</label>
        <div class="col-sm-9">
          <input type="correo" class="form-control" id="correo" name="correo" value="{{$alumno->correo}}">
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Grabar</button>
  </form>
 
@endsection
 
 
 
 