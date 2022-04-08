<?php

namespace App\Http\Controllers;

use App\Models\Solicitudes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['solicitudes'] = Solicitudes::paginate(5);// se elmacenas los datos en la variable empleados 
        return view('solicitudes.indexSolicitudes',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('solicitudes.create');
        
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
        $datosSolicitudes = request()->except('_token');

        if ($request->hasFile('Foto')) { // Si hay fotografia
            $datosSolicitudes['Foto']=$request->file('Foto')->store('uploads','public'); // Se sube la foto en la carpeta
           }
           

        Solicitudes::insert($datosSolicitudes);
       // return response()->json($datosEstudiante);
        return redirect('solicitudes')->with('mensaje','solicitud creada con éxito');
        // redireccion a vista estudiante y genera un mensaje de esta creado con exito
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $solicitudes=Solicitudes::findOrFail($id);
        return view('solicitudes.edit',compact('solicitudes')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosSolicitudes = request() -> except(['_token','_method']);


        if ($request->hasFile('Foto')) { // Si hay fotografia
            $solicitudes=Solicitudes::findOrFail($id);
            Storage::delete('public/'.$solicitudes->Foto);
            $datosSolicitudes['Foto']=$request->file('Foto')->store('uploads','public'); // Se sube la foto en la carpeta
           }


           Solicitudes::where('id','=',$id)->update($datosSolicitudes);
        $estudiante=Solicitudes::findOrFail($id);
        return view('estudiante.edit',compact('estudiante')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $solicitudes=Solicitudes::findOrFail($id);
        //busca la informaion por id
        
        Solicitudes::destroy($id);
        
        return redirect('solicitudes')->with('mensaje','Solicitud Borrada');
    }
}
