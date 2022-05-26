@extends('layouts/layoutadmin')



@section('content')




<div class="main -contect" style="margin-top:30px;">
    <form class="form-search" action="{{route('consultas.instrumentoconsulta')}}" method="get" action="" align="center">

    <input type="search" name="buscarproducto" placeholder="buscar.." required>
    <button   class="fa fa-search" type="submit"> BUSCAR  </button>
   
    </form> 
             


 


<br>
<br>



<style>

input:hover{
    background-color: #D7DBDD ;
   

}
input{
    height: 40px;
    width: 600px;
   

}


button{
color: white;
background-color: rgb(251, 210, 27);

border-radius: 200px;
width: 120px;
height: 40px;
}


</style>
</style>


<div id="main-container">

<table class="table">
  <thead>
    <tr>
    <th scope="col">Id Instrumento</th>
      <th scope="col">CodTipo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Modelo</th>
      <th scope="col">descripcion</th>
      <th scope="col">cantidad</th>
      <th scope="col">precio</th>
      <th scope="col">imagen</th>
    </tr>
  </thead>
  <tbody>
  @if(count($busqueda)<=0)
<tr>
  <td colspan="8">No tenemos este producto almacenado</td>
</tr>

 @else
       <!-- usaremos una directiva de laravel -->
  @foreach($busqueda as $buscar)
    <tr>
    <td>{{$buscar->id}}</td>
      <td>{{$buscar->tipo}}</td>
      <td>{{$buscar->nombre}}</td>
      <td>{{$buscar->modelo}}</td>
      <td>{{$buscar->descripcion}}</td>
      <td>{{$buscar->cantidad}}</td>
      <td>{{$buscar->precio}}</td>
      <td> <img src="{{$buscar->imagen}}" width="200px" height="200" alt=""></td>

     
    </tr>

    <!-- cerramos la directiva de laravel -->
    <td>
      <a href="javascript:document.getElementById('formeliminar-{{ $buscar->id}}').submit()"  class="btn btn-danger" onclick="return ConfirmDelete()" >Eliminar

    <script type="text/javascript"> function ConfirmDelete()
 {
     var respuesta = confirm("Esta seguro de borrar este producto??");

if (respuesta ==true )
{
    return true;
}
else
{
    return false;
}

 } </script>

                <form action="{{route('consultas.destroy', $buscar->id)}}" id="formeliminar-{{$buscar->id}}" method="POST">
                @method('delete')
                                    @csrf
    <th><a href="{{route('consultas.edit',$buscar->id)}}" class="btn btn-success">Editar</a></th>
    
    <th>      <a href="{{route('instrumentos.instrumento')}}" class="btn btn-primary">nuevo</a></th>
                                   
                                   


                                   
                                    </form>
                                    

</td>

@endforeach
@endif
        
                    </tbody>
                 
                </table>

                {{$busqueda->links()}}

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
<br>


<br>
<br>
<br>
<br>
<br>




                @endsection('')