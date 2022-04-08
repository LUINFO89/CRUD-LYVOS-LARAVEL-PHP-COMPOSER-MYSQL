<?php

namespace App\Http\Controllers;

use App\Models\Facturas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['facturas'] = Facturas::paginate(5); // se elmacenas los datos en la variable empleados 
        return view('facturas.indexFacturas', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('facturas.create');
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
        $datosFactura = request()->except('_token');

        if ($request->hasFile('Foto')) { // Si hay fotografia
            $datosFactura['Foto'] = $request->file('Foto')->store('uploads', 'public'); // Se sube la foto en la carpeta
        }


        Facturas::insert($datosFactura);
        // return response()->json($datosEstudiante);
        return redirect('facturas')->with('mensaje', 'Factura creada con éxito');
        // redireccion a vista estudiante y genera un mensaje de esta creado con exito
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function show(Facturas $facturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $facturas = Facturas::findOrFail($id);
        return view('facturas.edit', compact('facturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $datosFacturas = request() -> except(['_token','_method']);

        $facturas=Facturas::findOrFail($id);
        Facturas::where('id','=',$id)->update($datosFacturas);
        
        return view('facturas.edit',compact('facturas')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $facturas=Facturas::findOrFail($id);
        //busca la informaion por id
        
        Facturas::destroy($id);
        
        return redirect('facturas')->with('mensaje','factura Borrada');
    }
}
