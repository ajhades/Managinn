<?php

session_start();

include("header.php");
?>

<body>
  <div class="NavBar">
    <div class="Contenedor-Menu">
      <img src="img/iconos/managinn.png" width="180px" alt="" class="">
    </div>
  </div>

  <div class="RegDatos-Fondo"> 
    <div class="Caja-Texto">
      <!--<h5><strong> <?php /*echo $_SESSION['email_post']; */?></strong></h5>-->
      <div class = "Modal-1">
        <h2 class="Titulo Text-Center">¡Hola! Déjanos conocerte</h2>
        <p class="Subtitulo Text-Center">Cuéntanos sobre ti y tu trabajo.</p>

        <form action="" method = "post">

          <div class="Modal-Centro">

            <div>
              <p class="Texto-Formulario">Nombre</p>
              <input class = "Form-Field" 
              name="name_post"
              placeholder="¿Cómo te llamas?" 
              type="text"
              required/>
            </div>

            <div>
              <p class="Texto-Formulario">Compañía</p>
              <input class = "Form-Field"  
              name="company_post"
              placeholder= "Nombre de la compañía" 
              type="text"
              required/> 
             </div>

             <div>
              <input class = "Boton-Submit-Pequeño Submit-Principal Derecha" 
              name = "Boton-Registro" 
              placeholder= "Contraseña" 
              type="submit"
              value="Siguiente"/> 
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  <button><a href = "index.php?logout='1'">Salir</a></button>


<?php	include("footer.php");?>

