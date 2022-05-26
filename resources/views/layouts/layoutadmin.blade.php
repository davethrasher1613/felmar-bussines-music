<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
   
    <link rel="stylesheet" href="/Felmarsoacha/resources/css/actualizar.css">
    <link rel="stylesheet" href="/Felmarsoacha/resources/css/tablainstrumentos.css">
    
    <link rel="stylesheet" href="/Felmarsoacha/resources/css/formularioinstrumento.css">
    <link rel="stylesheet" href="/Felmarsoacha/resources/css/felmar.css">
    <link rel="stylesheet" href="/Felmarsoacha/resources/css/tipoinstrumento.css">
    
    <link rel="stylesheet" href="/Felmarsoacha/resources/css/tablaconsultas.css">


    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
  <head>
    <div   class="logo">

 
    <a href="{{route('registros.index')}}"> <img src ="/Felmarsoacha/img/captura.jpg" width="700px" height="259px" >  <br/>  </img></a>
      
      
      
      
      
      </div>
    
    
    
    <div class="menu">

      <ul>
         
          <li><a href="{{route('consultas.stockfelmar')}}" >INVENTARIO</a>
                                  <ul class="submenu">
                                      <li><a href="{{route('consultas.instrumentoconsulta')}}">BUSQUEDA</a></li>
                                    
             

                                                  
  </ul> 
           
  <li> <a href="{{route('instrumentos.instrumento')}}" >NUEVOS PRODUCTOS</a> </li>
                  <li><a href="{{route('tipos.tipoinstrumento')}}" >NUEVAS CATEGORIAS</a> </li>
                    
                      <li><a href="" >NUEVOS PROVEEDORES</a>
                       
                          <li><a href="" >VENTAS DEL DIA</a> </li>

                            
                            
                            





                         
  
                                  <li><a href="" >PERFIL</a>
                                  <ul class="submenu">
                                      <li><a href="">REGISTRATE</a></li>
                                      <li><a href="recaptcha/index.php">INICIAR SESION</a></li>
                                      
                                    
                                      
  </ul> 
                           
                                      
                                                                  
  </ul>


          </div>
        </head>

  @yield('content')






  <footer>

<div class="footer">

<h2 class="titulo_footer">Felmar Bussines Music interactua con sus clientes</h2>


<div class="redes_sociales">
<i class="fab fa-facebook f">Felmar Soacha</i>
<i class="fab fa-twitter">Felmar_Bussines_Music/Soacha</i>
<i class="fab fa-whatsapp">+573133399549 o +573194156527</i>

</div>

<div class="copyrigth">
<p >© Copyright 2021-2022  Daniel David Albarracin Yepes, Juan Sebastian Vaquero Arango / todos los derechos reservados </p>
</div>

</footer>
<script src="https://kit.fontawesome.com/e3aa94006d.js" crossorigin="anonymous"></script>
</div>            
</body>
          


         

</html>