<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends("layouts.plantilla")
@section("cabecera")
<div class="page-header text-center text-info">
    <h1>Listado de clientes</h1>
</div>
@endsection    


@section("principal")
    <table class="table table-responsive table-hover table-striped"> 
    <tr>
        <td> DNI</td>
        <td> Nombre</td>
        <td> Domicilio</td>
        <td> Tel 1</td>
        <td> Tel 2</td>
        <td> Localidad</td>
        <td> Observaciones</td>
        <td> Acciones</td>
    </tr>

 <!-- El if que sigue es para evaluar si la tabla tiene algún registro porque si está vacia aparecerá un error -->
 @if($clientes)
    @foreach($clientes as $cliente)
    <tr>
        <td>{{$cliente->dni}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->domicilio}}</td>
        <td>{{$cliente->tel1}}</td>
        <td>{{$cliente->tel2}}</td>
        <td>{{$cliente->localidad->nombre}}</td>
        <td>{{$cliente->observaciones}}</td>
        <td>
            <a href="{{url('/clientes/clientes/'.$cliente->id.'/edit')}}">Editar

            </a>    
        |
        <form method="post" action="{{route('clientes.edit', $cliente->id)}}">
            {{csrf_field() }}
            {{ method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
        </form>
        </td>
    </tr>
    @endforeach
  @endif  
 
</table>

@endsection












</body>
</html>