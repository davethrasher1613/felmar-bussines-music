<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar productos</title>
    <link rel="stylesheet" href="/Felmarsoacha/resources/css/formularioinstrumento.css">
    <link rel="stylesheet" href="/Felmarsoacha/resources/css/felmar.css">
    



    <div class="logo">
    <img  src ="/Felmarsoacha/img/app2.jpeg" >  <br/>  </img> <br/> <br/> 
    
    </div>
   
    
    
    
    <div class="menu">

      <ul>
          <li> <a href="{{route('consultas.stockfelmar')}}">INVENTARIO</a> </li>
      
              <li><a href="" >AMPLIFICADORES</a> </li>

             
              
                  <li><a href="b" >BAJOS</a> </li>
                    
                      <li><a href="" >BATERIAS</a>
                       
                          <li><a href="" >GUITARRAS</a> </li>

                            <li><a href="" >PEDALES</a> </li> 
                            
                            <li><a href="" >TECLADOS</a> </li>





                            <li><a href="" >COMBOS</a> </li>
  
                                  <li><a href="" >PERFIL</a>
                                  <ul class="submenu">
                                      <li><a href="">REGISTRATE</a></li>
                                      <li><a href="recaptcha/index.php">INICIAR SESION</a></li>
                                      
                                    
                                      
  </ul> 
                           
                                      
                                                                  
  </ul>


          </div>
</head>


<body>
   <form class="formulario"  method="POST" >
       @csrf

<h1 style="text-align: center;">Tipos de instrumentos</h1>


<div class="casilla">
<label class="label" for="">codigo de tipo</label>
<input class="espacio" type="text" name="codTipo"required>
</div>

<div class="casilla">
<labelclass="label" for="">nombre</labelclass=>
<input class="espacio" type="text" name="nombreInstrumento"required>
</div>



<button  class="boton1" type="submit" class="boton" >Guardar</button>

 <a href="{{route('registros.index')}}" class="boton2"  onclick="return ConfirmCancelar()" > Cancelar</a> 
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











</body>
</html>







