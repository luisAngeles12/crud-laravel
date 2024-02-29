
@extends('layaurd.inicio')

@section('titulo','Mensaje guardado')
    
@section('contenido')



<div class="alert alert-warning col-lg-8 col-sm-12 m-auto" role="alert">
    <h4 class="alert-heading">Editado</h4>
<h2>Persona Editada correctamente</h2>
    <hr>
     <a href="{{url('estudiantes')}}" class="btn btn-warning"><i class="fa-solid fa-rotate-left"></i> regresar</a>
  </div>


    
@endsection