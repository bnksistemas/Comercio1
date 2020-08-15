@extends('layouts.app')

@section('content')

<div class="container">


aqui va el formulario para dar de alta un empleado
<br />
<br />

<form action="{{url('/localidad/localidad')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('localidad.plantilla',['Modo'=>'crear'])

</form>
</div>
@endsection