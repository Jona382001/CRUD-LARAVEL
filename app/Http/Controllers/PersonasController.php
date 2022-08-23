<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Pagina de inicio
       $datos=Personas::all();
        return view('inicio',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario donde se agregan datos

        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar datos en la db

        $personas=new Personas();
        $personas->nombre=$request->post('nombre');
        $personas->apellido=$request->post('apellido');

        $personas->nacimiento=$request->post('nacimiento');
        $personas->save();

        return redirect()->route('personas.index')->with("success","Agregado con exito");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //obtiene para obtener un registro de la tablas

         $persona=Personas::find($id);
    
       
     
          return view('eliminar',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //obterner los datos que se van a editar y los coloca en un formulario
        $persona=Personas::find($id);
     
         return view('actualizar',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //guardar los datos nuevos
        $persona=Personas::find($id);
        $persona->nombre=$request->post('nombre');
        $persona->apellido=$request->post('apellido');

        $persona->nacimiento=$request->post('nacimiento');
        $persona->save();
        return redirect()->route('personas.index')->with("success","Actualizado con exito");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //elimina un registro

       $persona=Personas::find($id)->delete();
       return redirect()->route('personas.index')->with("success","Eliminado con exito");

    }
}
