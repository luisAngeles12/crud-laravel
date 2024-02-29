<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;


class estudiantesController extends Controller
{
    public function index(Request $request)
    {
       
      $buscar = $request ->get('buscar');
      
      $estudiantes = Usuario::where('name','LIKE','%'.$buscar.'%')
      ->orWhere('lastname','LIKE','%'.$buscar.'%')
      ->paginate(4);
      
    
        return view('home',compact('estudiantes','buscar'));
      
    }
    

    public function create()
    {
        return view('form_estudiante');
    }



    public function edit($id)
    {
      $estudiant= Usuario::find($id);

      return view('editaralumno',compact('estudiant'));
     
      
    }



    public function store(Request $request)
    {
        $newestudiant = new Usuario();
        $newestudiant->name = $request->input('name');
        $newestudiant->lastname = $request->input('lastname');
    
        $newestudiant->save();
        return view('mensaje');
      
    }

    public function update(request $request, $id )
    {
     
        $estudiant= Usuario::find($id);
        $estudiant->name = $request->input('name');
        $estudiant->lastname = $request->input('lastname');
    
        $estudiant->save();
        return view('guardado');
      
    }

    public function show($id)
    {
      $estudiant= Usuario::find($id);

      return view('eliminar',compact('estudiant'));
    }
    
    public function destroy(request $request,$id)
    {
      $estudiant= Usuario::find($id);
      $estudiant->name = $request->input('name');
      $estudiant->lastname = $request->input('lastname');
      $estudiant->delete();

      return view('eliminado',compact('estudiant'));
     
      
    }



}
