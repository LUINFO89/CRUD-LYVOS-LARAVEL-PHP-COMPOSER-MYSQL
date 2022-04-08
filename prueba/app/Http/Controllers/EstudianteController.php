<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['estudiantes'] = Estudiante::paginate(5);// se elmacenas los datos en la variable empleados 
        return view('estudiante.indexEstudiante',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiante.create');
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
        $datosEstudiante = request()->except('_token');

        if ($request->hasFile('Foto')) { // Si hay fotografia
            $datosEstudiante['Foto']=$request->file('Foto')->store('uploads','public'); // Se sube la foto en la carpeta
           }
           

        Estudiante::insert($datosEstudiante);
       // return response()->json($datosEstudiante);
        return redirect('estudiante')->with('mensaje','Estudiante creado con éxito');
        // redireccion a vista estudiante y genera un mensaje de esta creado con exito

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit',compact('estudiante')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEstudiante = request() -> except(['_token','_method']);


        if ($request->hasFile('Foto')) { // Si hay fotografia
            $estudiante=Estudiante::findOrFail($id);
            Storage::delete('public/'.$estudiante->Foto);
            $datosEstudiante['Foto']=$request->file('Foto')->store('uploads','public'); // Se sube la foto en la carpeta
           }


        Estudiante::where('id','=',$id)->update($datosEstudiante);
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit',compact('estudiante')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $estudiante=Estudiante::findOrFail($id);
        //busca la informaion por id
        if (Storage::delete('public/'.$estudiante->Foto)){
            Estudiante::destroy($id);
        }
        return redirect('estudiante')->with('mensaje','Estudiante Borrado');
    }
}
