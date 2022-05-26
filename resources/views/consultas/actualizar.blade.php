@extends('layouts/layoutadmin')



@section('content')

<body>
<div>

   <form  enctype="multipart/form-data" action="{{route('consultas.update', $busqueda->id)}}" id="formeditar-{{$busqueda->id}}" method="post" class="formulario" > 
       @csrf

<h1 style="text-align: center;">Actualizar instrumentos</h1>

<div class="casilla">
<label class="label" for="">codigo de intrumento</label>
<input class="espacio" type="text" name="id" value="{{$busqueda->id}}">
</div>

<div class="casilla">
<label class="label" for="">Categoria</label>
<input class="espacio" type="text" name="tipo" value="{{$busqueda->tipo}}">
</div>

<div class="casilla">
<labelclass="label" for="">nombre</labelclass=>
<input class="espacio" type="text" name="nombre" value="{{$busqueda->nombre}}">
</div>

<div class="casilla">
<label class="label" for="">modelo</label>
<input class="espacio" type="text" name="modelo" value="{{$busqueda->modelo}}">
</div>

<div class="casilla">
<label class="label" for="">descripcion</label>
<input class="espacio" type="text" name="descripcion" value="{{$busqueda->descripcion}}">
</div>

<div class="casilla">
<label class="label" for="">cantidad</label>
<input class="espacio" type="text" name="cantidad" value="{{$busqueda->cantidad}}">
</div>

<div class="casilla">
<label class="label" for="">precio</label>
<input class="espacio" type="text" name="precio" value="{{$busqueda->precio}}">
</div>

<div class="casilla">
<label class="label" for="">imagen</label>
<input class="espacio" type="file" name="imagen" value="">
</div>

<div  class="botonesact">


<a href="javascript:document.getElementById('formeditar-{{ $busqueda->id}}').submit()" class="botonact1">Actualizar</a>



@method('PUT')
    @csrf
 <a href="{{route('consultas.stockfelmar')}}" class="botonact2" >Cancelar</a> 
 </div>
 

 </form>

 </div>
 <br>
<br>
<br>












 
   @endsection('')

