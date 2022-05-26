
            
@extends('layouts/layoutadmin')



@section('content')

  

        <div class="titulo">
          
                  <h2 style="text-align: center;">INVENTARIO DE LA TIENDA</h2>

                  </div>

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
      <th scope="col">imagen</th >
    </tr>
  </thead>
  <tbody>

 
       <!-- usaremos una directiva de laravel -->
  @foreach($producto as $productos)
    <tr>
    <td>{{$productos->id}}</td>
      <td>{{$productos->tipo}}</td>
      <td>{{$productos->nombre}}</td>
      <td>{{$productos->modelo}}</td>
      <td>{{$productos->descripcion}}</td>
      <td>{{$productos->cantidad}}</td>
      <td>{{$productos->precio}}</td>
      <td> 
         
     <img src="{{$productos->imagen}}" width="200px" height="200" alt="">
    
    </td>

    
     
    </tr>

    <!-- cerramos la directiva de laravel -->
    <td>

<!-- hacemos un alert para confirmacion de eliminar-->

    <a href="javascript:document.getElementById('formeliminar-{{ $productos->id}}').submit()"  class="btn btn-danger" onclick="return ConfirmDelete()" >Eliminar

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




    
    </a>
                <form action="{{route('consultas.destroy', $productos->id)}}" id="formeliminar-{{$productos->id}}" method="POST">
                @method('delete')
                                    @csrf
    <th><a href="{{route('consultas.edit',$productos->id)}}" class="btn btn-success">Editar</a></th>
   <th><a href="{{route('instrumentos.instrumento')}}" class="btn btn-primary">nuevo</a></th> 
                                   
                                   


                                   
                                    </form>
                                    

</td>

@endforeach
        
                    </tbody>
                 
                </table>

{{$producto->links()}}

                </div>

<br>
<br>
<br>
<br>


@endsection('')