<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <title>Forzza</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/estiloheader.css">
 <link rel="stylesheet" href="css/fontello.css">
 <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/estilos.css">

<!--partial:index.partial.html -->
<header>




<div class="contenedor">

        <div class="menu_bar">

        <a href="#" class="bt-menu"><span class="icon-menu"></span> </a>

        </div>  
       <div class="navbar-leftx" >
           <img src="img/logo_frozza.png" alt="Cloudy Sky">
       </div>
 
    <div class="divbuscardor">  
        <!--<img src="img/logo_frozza.png" alt="Cloudy Sky">-->
        <!--<div class="contebus">-->    
        <input type="text"  placeholder="  BUSCADOR">  <!-- style="width : 452px; height : 48"</div> -->
     </div>

    <div class="quelepasalupita">
    <img src="img/lupa.png" alt="Cloudy Sky">
    
    </div>
    <?php
                             include "db.php";
                             
                             
                            if(isset($_SESSION["uid"]) && $_SESSION["uid"]!=-1){
                                $sql = "SELECT * FROM usuarios WHERE id_usuario='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);  
                                
                                echo '
                               <div class="dropdownn" id="loged">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> Hola '.$row["nombre"].'    </a>
                                    <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else if($_SESSION["uid"]==-1){
                              echo '
                              <div class="dropdownn" id="loged">
                                <a href="" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> Invitado </a>
                                <div class="dropdownn-content">
                                  <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                  <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                  
                                </div>
                              </div>';
                            }  
                            else{ 
                                echo '
                                <div class="dropdownn" id="loged">
                                  <a href="" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account '.$_SESSION["uid"].' </a>
                                  <div class="dropdownn-content">
                                    <a href="login_form.php" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                                             ?>


    <nav>
      <ul>

        <li> <a href="#"><span class="icon-power-cord"></span> INICIO</a></li>
        <li> <a href="#"><span class="icon-switch"></span>TRABAJO</a></li>
  
        <li class="submenu"> 
            <a href="#"><span class="icon-power"></span>PROYECTO<span class="caret icon-hammer2"></span></a>
              <ul class="children">

              <li><a href=""> SubElemento 1<span class="icon-power"></span></li></span></a>
              <li><a href=""> SubElemento 2 <span class="icon-power"></span></li></a>
              <li><a href=""> SubElemento 3 <span class="icon-power"></span></li></a>
         
             </ul>


        </li>

          <li> <a href="#"><span class="icon-shield"></span>SERVICIOS</a></li>
          <li> <a href="#"><span class="icon-lab"></span>CONTACTO</a></li>
        </ul>

    </nav>

            <div class="navbar-rightx">
           <a href="#" id="cart">
      
           <img src="img/carrito.png" alt="Cloudy Sky" class="imgcarro"></a>
             </i><span class="badge">0</span>
    
           <div class="shopping-cart">
           <div class="shopping-cart-header">
     
            <img class="torito" src="img/torito_rojo.png" alt="item1" /><span class="badge2">0</span>
             <div class="shopping-cart-total">
            
            </div>
      </div>
      <div class="cart-dropdown" id="pruebaCarro">
                <div class="cart-list" id="cart_product">

                </div>        
                <div class="cart-btns">
                     <a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>
              
                </div>
          </div>
    



      


    </div>
    </div>
   

          <!--</div>-->
  <!--</div> -->

 

 </header>


<!--
<div class="divnav">

<div class="menu">

<ul>

<a href= "#"><li> INICIO</li></a>
<a href= "#"><li> SEGURIDAD</li></a>

<a href= "#"><li> CONTRUCCION </li></a>

<a href= "#"><li> HOGAR </li></a>
<a href= "#"><li> HOLI </li></a>
<a href= "#"><li> HOLI </li></a>
</ul>


</div>

</div>-->



<!--
<div class="topnav" id="myTopnav">
  
  <a href="#home">Home</a>
  
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
-->



 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/carrito2.js"></script>
  <script  src="mainheader.js"></script>