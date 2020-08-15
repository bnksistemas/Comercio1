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
    </tr>

    <tr>
        <td>{{$cliente->dni}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->domicilio}}</td>
        <td>{{$cliente->tel1}}</td>
        <td>{{$cliente->tel2}}</td>
        <td>{{$cliente->localidad->nombre}}</td>
        <td>{{$cliente->observaciones}}</td>
    </tr>
  {{--   <td><a href="{{route('articulos.edit', $articulo->id)}}">{{$articulo->descripcion}} </a></td>  --}}
</table>

@endsection












</body>
</html>