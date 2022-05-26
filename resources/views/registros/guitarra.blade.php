@extends('layouts/layout')



@section('content')

<div class="titulo">
                  <h2 style="text-align: center;">Guitarras</h2>

                  </div>





                  <div class="parrafo" >
                  <p >Contamos con gran variedad de Guitarras electricas y acusticas con sus respectivos accesorios, tenemos grandes marcas como Yamaha, Fender, Gibson, Deans con firmas de guitarristas como Jhon petrucci de Dream Theater, Dimebag Darrell de pantera, El gran maestro del flamenco Paco de lucia,entre otros musicos de talla nacional e internacional, tenemos guitarras de mas de 6 cuerdas, diversos tipos de puentes etc... ademas tenemos una gran variedad de precios y las mejores marcas que se ajusten a tu bolsillo y a tus gustos, que estas esperandooo!!! selecciona la guitarra que mas te guste y disfruta de tu compra al 100% la primera revision con el luttier es totalmente gratis</p>
                  </div>
                  

                  <div class="main -contect" style="margin-top:30px;">
    <form class="form-search" action="{{route('consultas.buscarproducto')}}" method="get" action="" align="center">

    <input type="search" name="buscar" placeholder="buscar.." required>
    <button   class="fa fa-search" type="submit"> BUSCAR  </button>
   
    </form> 

                  </div>
                  
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
                    background-color: rgb(233, 193, 13);
                    border-radius: 200px;
                    width: 120px;
                    height: 40px;
                    }
                    
                    
                    </style>
                    


                  <div class="container">
                  @foreach($guitarra as $guitarras)
                
                      <div class="item">
                      <img src="{{$guitarras->imagen}}" width="350 " height="200" alt=""/>
                      @csrf
                        <div class="item-text">
                          <h2>{{$guitarras->nombre}}</h2> 
                          <h2>{{$guitarras->modelo}}</h2> 
                          <h2>{{$guitarras->descripcion}}</h2>
                          <h2>${{$guitarras->precio}}</h2>
                          <input  style="background-color: rgb(243, 144, 16); width:250px;height:50px; " style="font-size: 30px;" name="compra"  type="submit" value="compra este producto">
                         
                        </div>
                       
                      </div>
                      
                      @endforeach
                      </div>
                  
                   
                  

                    @endsection('')