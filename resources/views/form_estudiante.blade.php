@extends('layaurd.inicio')

@section('titulo','Registrar Nuevo Estudiante')
    
@section('contenido')

    <div class="container  py-4 mt-5 bg-light rounded-1"  >

   
    <h2 class="mt-2  text-secondary">Registar nuevo estudiante</h1>
    
    <form method="POST" action="{{url("store")}}">
        @csrf
        <div class="col-6 mb-3"> 
         <label for="name" class="form-label col-6 text-secondary">Name:</label>
         <input type="text" name="name"  required class="form-control col-6" >
        </div>
 
        <div class=" col-6 mb-4">
         <label for="lastname" class="form-label text-secondary">LastName:</label>
         <input type="text" name="lastname" class="form-control" id="lastname" required>            
        </div>


         <input type="submit" value="Crear" class="btn btn-sm btn-primary">
         <a href="{{'estudiantes'}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-rotate-left"></i> Regresar</a>
  </form>

 </div>

 @endsection
