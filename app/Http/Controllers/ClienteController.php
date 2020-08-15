<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\User;
use App\Localidad;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes=Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    
    
        public function create()
    {
        // en localidads armo un array de la tabla localidad conteniendo el nombre y el id
        // eso lo hace el metodo pluck
        
        $localidads = Localidad::pluck('nombre','id');
        return view('clientes.create', compact('localidads'));
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
        // return $request->all();
        Cliente::create($request->all());
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
        $cliente=Cliente::findOrFail($id);

        return view('clientes.show',compact('cliente'));
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
        $cliente=Cliente::findOrFail($id);
        $localidads = Localidad::pluck('nombre','id');
        return view('clientes.edit',compact('cliente','localidads'));
    }





    public function update(Request $request, $id)
    {
        //
        $cliente=Cliente::findOrFail($id);
        $entrada=$request->all();
        // le decimos que actualice la información
         $cliente->update($entrada);
        //Cuando terminamos redireccionamos la pagina de edición a la pagina principal (index)
        return redirect('/clientes/clientes');
    }



  
    
    
    
    
     public function destroy($id)
    {
        //
        Cliente::destroy($id);
        return redirect('clientes/clientes');
    }
}
