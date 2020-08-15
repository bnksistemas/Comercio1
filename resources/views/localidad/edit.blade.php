@extends('layouts.app')

@section('content')

<div class="container">


seccion para cambiar - actualizar los datos de la Localidad

<form action="{{url('/localidad/localidad/'.$localidad->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('localidad.plantilla',['Modo'=>'editar'])


</form>
</div>
@endsection