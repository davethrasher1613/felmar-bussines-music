
            
@extends('layouts/layoutadmin')



@section('content')


<body>
<form  enctype="multipart/form-data" action="{{route('instrumentos.store')}}" class="formulario"  method="post" >
       @csrf

<h1 style="text-align: center;">Ingreso de instrumentos</h1>

<div class="casilla">
<label class="label" for="">codigo de intrumento</label>
<input class="espacio" type="text" name="id" required>
</div>

<div class="casilla">
<label class="label" for="">categoria</label>
<select class="espacio" name="tipo" id="tipo">
@foreach($codTipos as $codTipo)


<option value="{{$codTipo['codTipo']}}">{{ $codTipo['nombreInstrumento']}}</option>


 @endforeach

</select>
</div>



<div class="casilla">
<labelclass="label" for="">nombre</labelclass=>
<input class="espacio" type="text" name="nombre"required>
</div>

<div class="casilla">
<label class="label" for="">modelo</label>
<input class="espacio" type="text" name="modelo"required>
</div>

<div class="casilla">
<label class="label" for="">descripcion</label>
<input class="espacio" type="text" name="descripcion"required>
</div>

<div class="casilla">
<label class="label" for="">cantidad</label>
<input class="espacio" type="text" name="cantidad"required>
</div>

<div class="casilla">
<label class="label" for="">precio</label>
<input class="espacio" type="text" name="precio"required>
</div>

<div class="casilla">
    <label class="label" for="">imagen</label>
    <img src="{{ asset('imagesproducto/')}}" alt="">
    <input class="espacio" type="file" name="imagen"required>
</div>

<div class="botones">
    <button   class="botoninst1" type="submit" class="boton" >Guardar</button>

    <a href="{{route('registros.index')}}" class="botoninst2"  onclick="return ConfirmCancelar()" > Cancelar</a> 
</div>

<!--  hacemos un alert para confirmar la cancelacion del ingreso de productos-->

<script type="text/javascript"> function ConfirmCancelar()
 {
     var respuesta = confirm("Esta seguro de cancelar el ingreso de instrumentos??");

if (respuesta ==true )
{
    return true;
}
else
{
    return false;
}

 } </script>

</div>
</form>
</div>



<br>
<br>
<br>
<br>






@endsection('')








