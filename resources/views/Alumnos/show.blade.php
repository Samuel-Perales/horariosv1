@extends('plantillas/plantilla2')
 
@section('contenido1')
 
    @include('Alumnos/tablahtml')
   
@endsection
 
@section('contenido2')
 
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Alumnos.destroy',$alumno->id)}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$alumno->nombre}}">
      </div>
    </div>
 
    <div class="row mb-3">
        <label for="apellidoP" class="col-sm-3 col-form-label">Apellido Paterno</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidoP" name="apellidoP" disabled value="{{$alumno->apellidop}}">
        </div>
      </div>
 
      <div class="row mb-3">
        <label for="correo" class="col-sm-3 col-form-label">correo</label>
        <div class="col-sm-9">
          <input type="correo" class="form-control" id="correo" name="correo" disabled value="{{$alumno->correo}}">
        </div>
      </div>
    <button type="submit" class="btn btn-danger">Esta seguro que desea eliminar?</button>
    <a href="{{route('Alumnos.index')}}" class="btn btn-primary">REGRESAR</a>
  </form>
 
@endsection