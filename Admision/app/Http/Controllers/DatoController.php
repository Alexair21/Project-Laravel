<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;
use App\Models\Tdocumento;
use App\Models\Sexo;

class DatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Dato::all();
        return view('datos.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos = Sexo::all();
        $tipos_documentos = Tdocumento::all();
        return view('datos.create', compact('tipos_documentos', 'sexos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'apellidos_nombres' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo_id' => 'required',
            'nacionalidad' => 'required',
            'tipo_documento_id' => 'required',
            'dni' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',

        ]);

        $dato = new Dato();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $carpetadestino= 'imagenes/fotos/';
            $nombrefile = time().'-'.$file->getClientOriginalName();
            $guardarimagen = $request->file('imagen')->move($carpetadestino, $nombrefile);
            $dato->imagen = $carpetadestino.$nombrefile;
        }

        $dato->apellidos_nombres = $request->apellidos_nombres;
        $dato->fecha_nacimiento = $request->fecha_nacimiento;
        $dato->sexo_id = $request->sexo_id;
        $dato->nacionalidad = $request->nacionalidad;
        $dato->tipo_documento_id = $request->tipo_documento_id;
        $dato->dni = $request->dni;
        $dato->direccion = $request->direccion;
        $dato->telefono = $request->telefono;
        $dato->email = $request->email;



        $dato->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dato  $dato
     * @return \Illuminate\Http\Response
     */
    public function show(Dato $dato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dato  $dato
     * @return \Illuminate\Http\Response
     */
    public function edit(Dato $dato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dato  $dato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dato $dato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dato  $dato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dato $dato){
        //funcion para eliminar de la base de datos
        $dato->delete();
        return redirect()->route('datos.index')->with('success', 'Registro eliminado satisfactoriamente');
    }

}
