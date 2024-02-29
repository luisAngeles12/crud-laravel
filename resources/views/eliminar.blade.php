@extends('layaurd.inicio')

@section('titulo','Editar Eliminar')
    
@section('contenido')



<div class="card col-lg-8 m-auto" >
    <h5 class="card-header bg-danger">Esta seguro de eliminar este estudiante</h5>
    <div class="card-body">

      <table  class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Lastname</th>
               </tr>
           </thead>
           
           <tbody>
               <tr>
                   
                   <td class="text-danger">{{ $estudiant->id }}</td>
                   <td class="text-danger">{{ $estudiant->name }}</td>
                   <td class="text-danger">{{ $estudiant->lastname }}</td>
               </tr>
           </tbody>
       </table>
       
       
       <form action="{{url('eliminar', $estudiant->id)}}"method="get">
           
           <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" required>
           <a href="{{'/estudiantes'}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-rotate-left"></i> Regresar</a>
           
       </form> 
       
    </div>
  </div>





     
  


           
 
    
@endsection