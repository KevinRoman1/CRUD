<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *  @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos=DB::table('proyectos')->get();
        return view('projects/index',['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('projects/new');

    }

    /**
     * Store a newly created resource in storage
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect('project/')
        ->with('success','Proyecto creado satisfactoriamente');
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $proyecto= Proyecto::find($id);
        return view("projects/update",compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo'=>"required",
            'descripcion'=>"required"
        ]);
        $proyecto=Proyecto::find($id);
        $proyecto->update($request->all());
        return redirect('project/')
        ->with('success','Prouecto actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
