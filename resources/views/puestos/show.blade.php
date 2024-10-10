@extends('plantillas/plantilla2')
 
@section('contenido1')
 
    @include('puestos/tablahtml')
   
@endsection
 
@section('contenido2')
 
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('puestos.destroy',$puesto->id)}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="idpuesto" class="col-sm-3 col-form-label">ID Puesto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idpuesto" name="idpuesto" disabled value="{{$puesto->idpuesto}}">
      </div>
    </div>
 
    <div class="row mb-3">
        <label for="nombrepuesto" class="col-sm-3 col-form-label">Nombre Puesto</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombrepuesto" name="nombrepuesto" disabled value="{{$puesto->nombrepuesto}}">
        </div>
      </div>
 
      <div class="row mb-3">
        <label for="tipo" class="col-sm-3 col-form-label">tipo</label>
        <div class="col-sm-9">
          <input type="tipo" class="form-control" id="tipo" name="tipo" disabled value="{{$puesto->tipo}}">
        </div>
      </div>
    <button type="submit" class="btn btn-danger">Esta seguro que desea eliminar?</button>
    <a href="{{route('puestos.index')}}" class="btn btn-primary">REGRESAR</a>
  </form>
 
@endsection