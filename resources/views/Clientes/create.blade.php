<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Altas de clientes</h1>


    <!-- 'files'=>true se lo decimos para que almacene fotos -->
 
    {!! Form::open(['route'=>'clientes.store','method' => 'STORE', 'files'=>true, 'role'=>'form'])!!}

    <label for="dni">{{'DNI'}}</label>
    <input type="text" name="dni" id="dni" value="">
    
    <label for="nombre">{{'Nombre'}}</label>
    <input type="text" name="nombre" id="nombre" value="">

    <label for="domicilio">{{'Domicilio'}}</label>
    <input type="text" name="domicilio" id="domicilio" value="">    

    <label for="tel1">{{'Telefono Ppal'}}</label>
    <input type="text" name="tel1" id="tel1" value="">    

    <label for="tel2">{{'Telefono Secundario'}}</label>
    <input type="text" name="tel2" id="tel2" value="">    
<br/>
<br/>
<br/>
<label for="localidad_id">{{'Localidad'}}</label>
{!! Form::select('localidad_id', $localidads) !!}

<!--

    <br>
   
    <tr>
       <td>{!!Form::label('localidad_id', 'Localidad: ')!!}</td>
        <td> {!! Form::select('localidad_id', $localidads) !!}</td>
    </tr>
--> 
<br/>
<br/>
    <label for="observaciones">{{'Observaciones'}}</label>
    <input type="text" name="observaciones" id="observaciones" value="">   

  






    <!-- ahora vienen los botones -->

    {!!Form::submit('Crear Cliente')!!}
    {!!Form::reset('Borrar Datos')!!}


    {!! Form::close() !!}










</body>

</html>