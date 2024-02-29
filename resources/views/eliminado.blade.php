@extends('layaurd.inicio')

@section('titulo','Mensaje de eliminacion')
    
@section('contenido')

<div class="alert alert-danger col-lg-8 col-sm-12 m-auto" role="alert">
    <h4 class="alert-heading">Eliminado</h4>
<h2>Persona Eliminada correctamente</h2>
    <hr>
     <a href="{{url('estudiantes')}}" class="btn btn-danger"><i class="fa-solid fa-rotate-left"></i> regresar</a>
  </div>
@endsection