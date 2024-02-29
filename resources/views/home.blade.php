
    @extends('layaurd.inicio')
    @section('titulo','Registro de Estudiantes')

    @section('contenido')


    <div class="container">

        <!--tabla test,titulo-->
        <h1 class="text-body-secondary">Lista de estudiantes</h1>

        <!--navbar opcion de busqueda-->
        <nav class="navbar  ">
        
              <form action="{{url('estudiantes')}}" class="d-flex" role="search" method="GET">
                <input class="form-control me-2 form-control-sm" type="search" placeholder="Search" name='buscar' value={{$buscar}}>
                <button class="btn btn-outline-primary btn-sm" type="submit">Search</button>
              </form>

                <a href="{{'formestudent'}}" class="btn btn-primary btn-sm mb-2"><i class="fa-solid fa-plus"></i> nuevo estudiante</a>
          </nav>

    <!--tabla de de estudiantes -->
    <table border="1" class="table ">

        
        <thead>
            <tr class="table-light">
                <th>ID</th>
                <th>name</th>
                <th>lastname</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

     <!-- if agregado por si el nombre que buscamos en seach no se encuentra en la tabla-->
        @if (count($estudiantes)<= 0)

            <tr>
                <td colspan="5"> No hay resultados</td>
            </tr>
        @else

        <!--foreach estudiant usado para mostrar los datos de phpmyadmin-->
        @foreach($estudiantes as $estudiant)
        
         <tbody>
             <tr>
            <td>{{ $estudiant->id }}</td>
            <td>{{ $estudiant->name }}</td>
            <td>{{ $estudiant->lastname }}</td>
            <td>{{ $estudiant->Editar }}
                
                <form action="{{url('editar', $estudiant->id)}}"method="get">
                    <button class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen"></i></button>
                </form>
                
            </td>
            
            <td>{{ $estudiant->Eliminar }}

                <form action="{{url('show', $estudiant->id)}}"method="get">
                    <button class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></button>
                </form>
                 


               
                                
            </td>
                            
        </tr>
    </tbody>
   
       @endforeach 
       @endif
    </table> 
  
    <div class="card-body mt-6">
    
        {{$estudiantes->links()}}
    </div>
 

    
    @endsection
    
    