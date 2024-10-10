@extends('plantillas/plantilla2')
 
@section('contenido1')
 
    @include('Alumnos/tablahtml')
   
@endsection
 
@section('contenido2')
 
<form action="{{route('Alumnos.store')}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
    </div>
 
    <div class="row mb-3">
        <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidop" name="apellidop">
        </div>
      </div>
 
      <div class="row mb-3">
        <label for="correo" class="col-sm-3 col-form-label">correo</label>
        <div class="col-sm-9">
          <input type="correo" class="form-control" id="correo" name="correo">
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Grabar</button>
  </form>
 
@endsection
 
 
 
 