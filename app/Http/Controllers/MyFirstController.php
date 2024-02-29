<?php

namespace App\Http\Controllers;

use App\Models\MyFirstModel;
use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Enlazar el controller a una ruta y listar los registros de la tabla test en formato JSON//
        $students = MyFirstModel::all();
        return response() -> json([ 
            "students" => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
