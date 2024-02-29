@extends('layaurd.inicio')

@section('titulo','Editar Estudiante')
    
@section('contenido')
<div class="container py-4 mt-5 bg-light rounded-1">

    <h2 class="mt-2  text-secondary">Editar Alumno</h2>
    <form action="{{route('update',$estudiant->id)}}"method="POST" ">
        @csrf
        @method("PUT")
    <div class="col-6 mb-3">
        <label for="nombre"  class="form-label col-6 text-secondary">Name</label>
        <input type="text" name="name" class="form-control col-6" value="{{$estudiant ->name}}">
    </div>

    <div class=" col-6 mb-4">
        <label for="apellido"class="form-label text-secondary">LastName</label>
        <input type="text" name="lastname" class="form-control" value="{{$estudiant->lastname}}" required >
    </div>

        <input type="submit" value="Editar" class="btn btn-sm btn-primary" required>
        <a href="{{'/estudiantes'}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-rotate-left"></i> regresar</a>
    </form>
</div>
@endsection