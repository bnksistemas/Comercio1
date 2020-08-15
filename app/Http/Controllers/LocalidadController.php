<?php

namespace App\Http\Controllers;


use App\Cliente;
use App\Localidad;
use App\User;

use Illuminate\Http\Request;

class LocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['localidads']=Localidad::paginate(3);
        return  view('localidad.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('localidad.create');

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
        // Validación
        $campos=[
            'nombre' => 'required|string|max:100'
        ];
        $Mensaje=["required"=>'El :attribute no puede ser nulo'];
        $this->validate($request, $campos, $Mensaje);

        $localidad=request()->except('_token');
        Localidad::insert($localidad);
        //return response()->json($localidad);
        return redirect('localidad/localidad')->with('Mensaje','Localidad agregada con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $localidad=Localidad::findOrFail($id);
        return view('localidad.edit',compact('localidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // Validación
        $campos=[
            'nombre' => 'required|string|max:100'
        ];
        $Mensaje=["required"=>'El :attribute no puede ser nulo'];
        $this->validate($request, $campos, $Mensaje);



        $localidad=request()->except(['_token','_method']);
        Localidad::where('id','=',$id)->update($localidad);
        // $localidad=Localidad::findOrFail($id);
        // return view('localidad.edit',compact('localidad'));
        return redirect('localidad/localidad')->with('Mensaje','Localidad MODIFICADA con éxito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Localidad::destroy($id);
        //return redirect('localidad/localidad');
        return redirect('localidad/localidad')->with('Mensaje','Localidad E L I M I N A D A');


    }
}
