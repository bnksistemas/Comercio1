@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
    {{Session::get('Mensaje')}}     
</div>

@endif



<a href="{{url('localidad/localidad/create')}}" class="btn btn-success">Agregar Localidad</a>
<br/>
<br/>


<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Localidad</th>
        </tr>
    </thead>
    <tbody>
    @foreach($localidads as $localidad)
        <tr>
            <td>{{$localidad->id}}</td>
            <td>{{$localidad->nombre}}</td>
            <td>
            <a class="btn btn-warning" href="{{url('/localidad/localidad/'.$localidad->id.'/edit')}}">
            Editar
            </a>
            
    
            <form method="post" action="{{url('/localidad/localidad/'.$localidad->id)}}" style="display:inline">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button class="btn btn-danger" type="submit" onclick="return confirm('Borrar??');">Borrar</button>

            </form>
            </td>
        </tr>
    @endforeach    
    </tbody>
</table>
{{$localidads->links() }}
</div>
@endsection