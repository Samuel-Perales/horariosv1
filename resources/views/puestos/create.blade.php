@extends('plantillas/plantilla2')
 
@section('contenido1')
 
    @include('puestos/tablahtml')
   
@endsection
 
@section('contenido2')
 
<form action="{{route('puestos.store')}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="idpuesto" class="col-sm-3 col-form-label">idpuesto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idpuesto" name="idpuesto">
      </div>
    </div>
 
    <div class="row mb-3">
        <label for="nombrepuesto" class="col-sm-3 col-form-label">Nombre Puesto</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombrepuesto" name="nombrepuesto">
        </div>
      </div>
 
      <div class="row mb-3">
        <label for="tipo" class="col-sm-3 col-form-label">tipo</label>
        <div class="col-sm-9">
          <input type="tipo" class="form-control" id="tipo" name="tipo">
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Grabar</button>
  </form>
 
@endsection
 
 
 
 