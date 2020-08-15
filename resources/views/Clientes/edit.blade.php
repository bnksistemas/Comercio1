<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edicion de clientes</h1>


  
        <!-- 'files'=>true se lo decimos para que almacene fotos -->

 
    {!! Form::model($cliente, ['method' => 'PATCH', 'route'=>['clientes.update', $cliente->id],  'files'=>true,'role'=>'form' ])!!}

<div class="form-group">

<label for="dni" class="control-label">{{'DNI'}}</label>

<input type="text" class="form-control {{$errors->has('dni')?'is-invalid':''}} "
name="dni"
id="dni" 
value="{{isset($Cliente->dni)? $Cliente->dni:old('dni')}}" placeholder="DNI">
{!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}

</div>




{{--
        {!!Form::label('dni', 'DNI: ', array('class'=>'negrita'))!!}
    {!!Form::text('dni',null,['class'=>'form-control','placeholder'=>'documento'])!!}

--}}

    {!!Form::label('nombre', 'Nombre: ')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}


    {!!Form::label('domicilio', 'Domicilio: ')!!}
    {!!Form::text('$cliente->domicilio')!!}



    {!!Form::label('tel1', 'Telefono: ')!!}
    {!!Form::text('tel1')!!}



    {!!Form::label('tel2', 'Tel Contacto: ')!!}
    {!!Form::text('tel2')!!}


    <br>
   
    
    <tr>
       <td>{!!Form::label('localidad_id', 'Localidad: ')!!}</td>
        <td> {!! Form::select('localidad_id', $localidads) !!}</td>
    </tr>
   

    {!!Form::label('observaciones', 'Observaciones: ')!!}
    {!!Form::textarea('observaciones')!!}






    <!-- ahora vienen los botones -->

    {!!Form::submit('Crear Cliente')!!}
    {!!Form::reset('Borrar Datos')!!}


    {!! Form::close() !!}










</body>

</html>