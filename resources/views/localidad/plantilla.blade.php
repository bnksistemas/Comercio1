<div class="form-group">

    <label for="Localidad" class="control-label">{{'Localidad'}}</label>

    <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}} "
    name="nombre"
    id="nombre" 
    value="{{isset($localidad->nombre)? $localidad->nombre:old('nombre')}}" placeholder="Nombre Localidad">
    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}

</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear'? 'Agregar Localidad':'Modificar Localidad'}}">
<a class="btn btn-primary" href="{{url('localidad/localidad')}}">Regresar</a>