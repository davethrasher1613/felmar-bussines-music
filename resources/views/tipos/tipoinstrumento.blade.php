            
@extends('layouts/layoutadmin')



@section('content')


<body>
   <form class="formulariotipo"  method="POST" >
       @csrf

<h1 style="text-align: center;">Tipos de instrumentos</h1>


<div class="casillatipo">
<label class="label" for="">codigo de tipo</label>
<input class="espacio" type="text" name="codTipo"required>
</div>

<div class="casillatipo">
<labelclass="label" for="">nombre</labelclass=>
<input class="espacio" type="text" name="nombreInstrumento"required>
</div>


<div class="botonestipo">
<button  class="botontipo1" type="submit" class="boton" >Guardar</button>

 <a href="{{route('registros.index')}}" class="botontipo2"  onclick="return ConfirmCancelar()" > Cancelar</a> 
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
<br>
<br>
<br>
<br>
<br>





@endsection('')






