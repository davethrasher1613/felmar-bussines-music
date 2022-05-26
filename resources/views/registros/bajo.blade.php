@extends('layouts/layout')



@section('content')

 <article class="articulo1">

 <div class="titulo">
 <h2 style="text-align: center;">Bajos</h2>

 </div>
                 

                  <br>

                  <div class="parrafo" >
                  <p >Contamos con gran variedad de Bajos  electricos y acusticos, tenemos grandes marcas como yamaha o ibaanez con firmas de bajistas como Jhon Myung de Dream Theater o Steve Di Giorgio de Testament, bajos de mas de 4 cuerdas ademas tenemos una gran variedad de precios y las mejores marcas que se ajusten a tu bolsillo y a tus gustos, que estas esperandooo!!! selecciona el bajo que mas te guste y disfruta de tu compra al 100% la primera revision con el luttier es totalmente gratis</p>
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
                  @foreach($guitarrabaja as $bajos)
                
                      <div class="item">
                      <img src="{{$bajos->imagen}}" width="350 " height="200" alt=""/>
                      @csrf
                        <div class="item-text">
                          <h2>{{$bajos->nombre}}</h2> 
                          <h2>{{$bajos->modelo}}</h2> 
                          <h2>{{$bajos->descripcion}}</h2>
                          <h2>${{$bajos->precio}}</h2>
                          <input  style="background-color: rgb(243, 144, 16); width:250px;height:50px; " style="font-size: 30px;" name="compra"  type="submit" value="compra este producto">
                         
                        </div>
                       
                      </div>
                      
                      @endforeach
                      </div>


                  
                    @endsection('')      

  