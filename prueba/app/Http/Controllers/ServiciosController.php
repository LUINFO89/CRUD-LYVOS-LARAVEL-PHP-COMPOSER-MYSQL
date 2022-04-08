<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['servicios']=servicios::paginate(5);//se almacenan los datos en una variable llamada empleados
        return view('servicios.indexServicios',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servicios.create');//formulario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosServicios = request()->except('_token');

        if ($request->hasFile('Foto')) { // Si hay fotografia
            $datosServicios['Foto']=$request->file('Foto')->store('uploads','public'); // Se sube la foto en la carpeta
           }
           

        Servicios::insert($datosServicios);
       // return response()->json($datosEstudiante);
        return redirect('servicios')->with('mensaje','Servicio creado con éxito');
        // redireccion a vista estudiante y genera un mensaje de esta creado con exito

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $servicios=Servicios::findOrFail($id);
        return view('servicios.edit',compact('servicios')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicios $id)
    {
        //
        $datosServicios = request() -> except(['_token','_method']);

        $servicios=Servicios::findOrFail($id);
        Servicios::where('id','=',$id)->update($datosServicios);
        
        return view('servicios.edit',compact('servicios')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $servicios=Servicios::findOrFail($id);
        //busca la informaion por id
        Servicios::destroy($id);
        return redirect('servicios')->with('mensaje','Servicio Borrado');
    }
}
