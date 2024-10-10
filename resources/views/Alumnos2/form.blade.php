@extends('plantillas/plantilla2')
 
@section('contenido1')
 
    @include('Alumnos2/tablahtml')
   
@endsection
 
@section('contenido2')
 {{-- <h1>Insetando frm</h1>
 <ul>
  @foreach ($errors->all() as $error)
    <li>
      {{$error}}
    </li>
  @endforeach
 </ul> --}}
<form action="{{route('Alumnos.store')}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$alumno->nombre)}}">
        @error('nombre')
            <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
 
    <div class="row mb-3">
        <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidop" name="apellidop" value="{{old('apellidop',$alumno->apellidop)}}">
          @error('apellidop')
            <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
      </div>
 
      <div class="row mb-3">
        <label for="correo" class="col-sm-3 col-form-label">correo</label>
        <div class="col-sm-9">
          <input type="correo" class="form-control" id="correo" name="correo" value="{{old('correo',$alumno->correo)}}">
          @error('correo')
            <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Grabar</button>
  </form>
 
@endsection
 
 
 
 