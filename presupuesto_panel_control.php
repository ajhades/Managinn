<?php
  session_start();
  
  $nombre = $_SESSION['name_post'];
  $correo = $_SESSION['email_post'];
  $rol = $_SESSION['role_post'];

  include("header.php");
  ?>

<body class="global-view panel_control presupuesto">
  <div class="NavBar">
    <div class="Contenedor-Menu">
      <!-- <img src="img/iconos/managinn.png" width="180px" alt="" class=""> -->
    </div>
  </div>

    <div class = "Columna-Perfil d-flex flex-column">
      <div class="icon_home">
        <img src="img/iconos/inn.svg" width="180px" alt="" class="">
      </div>
      <div class = "Elementos-Perfil">
        <div class = "Botones-Perfil">
          <a class="Icono-Menu-Perfil" href = "perfil.php">
            <img src="./img/iconos/icono_proyectos.svg" alt="Dashboard">
          </a>
          <a class="Icono-Menu-Perfil "  href = "global.php">
            <img src="./img/iconos/icono_global.svg" alt="Global">
          </a>
          <a class="Icono-Menu-Perfil" href = "personas.php">
            <img src="./img/iconos/icono_personas.svg" alt="Personas">
          </a>
          <a class="Icono-Menu-Perfil current" href = "presupuesto.php">
            <img class="current-Icono" src="./img/iconos/icono_presupuesto.svg" alt="Presupuesto">
          </a>
        </div>

        <div class = "Usuario-Perfil"> 

          <img src = "./img/iconos/Icono-Perfil.png" alt="Icono" 
          height="45px"
          style = "border-radius: 5px; float: left; margin-right: 10px;">

          <div style = "float:left;">
            <p class="Texto-Nombre-Perfil"><strong> <?php echo $_SESSION['name_post'];?></strong></p>
            <p class="Texto-Rol-Perfil"><?php echo $_SESSION['role_post'];?></p>
          </div>

          <div class = "Perfil-Dropdown-Container" style = "float: right;">
            <div class="btn-group dropright ">
              <button type="button" class="btn btn-secondary dropdown-toggle Boton-Dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
              </button>
              <div class="dropdown-menu">
                <!-- Dropdown menu links -->
                <a style="color:#eb5757; margin-left: 15px" href = "index.php?logout='1'">Cerrar Sesión</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div class="contenedor_dashboard">
        <div class="container-fluid">
            <div class="row kpi">
                <div class="col-5 my-3">
                    <div class="info_general px-2 pb-0 pt-2 d-flex flex-row justify-content-between align-items-center h-100">
                        <div class="nombre">
                            <h2>Hola,<?php echo $_SESSION['name_post'];?></h2>
                            <p>Este es el presupuesto del sistema de innovación en:</p> 
                        </div>
                        <div class="mes d-flex flex-row align-items-center justify-content-around">
                            <a id="less_month" href="#"><</a>
                            <span id="mes_actual">Diciembre</span>
                            <a id="more_month" href="#">></a>
                        </div>
                        <div class="imagen">
                            <img src="img/iconos/ilustracion_saludo.svg" alt="Saludo">
                        </div>
                    </div>
                </div>
                <div class="col-3 my-3">
                    <div class="box-shadow px-2 pb-0 pt-2 d-flex flex-row justify-content-around align-items-center">
                        <div class="texto_escalamiento">
                          <h4 class="uppercase"><img src="img/iconos/presupuesto_total.svg" alt="" class="img_icons"> Presupuesto Total</h4>
                          <div class="d-flex flex-column">
                            <span id="presupuesto_usado" class="icon_pesos">0</span>
                            <span class="total">de <em id="total_presupuesto_usado" >$0</em> <em><span class="badge badge-pill badge-azul">Anual</span></em> </span>
                          </div>
                        </div>
                        <div class="icono_info">
                          <a href="#">
                            <img src="img/iconos/icono-informacion.svg" alt="">
                          </a>
                        </div>
                        <div class="icono_mas">
                          <a href="#">
                            <img src="img/iconos/flecha_derecha.svg" alt="">
                          </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="conversion box-shadow px-0 pb-0 pt-2 d-flex flex-row justify-content-around align-items-center">
                        <div class="texto_escalamiento">
                            <h4  class="uppercase"><img src="img/iconos/icono_dias_activo.svg" alt="" class="img_icons">Estado del presupuesto</h4>
                            <div>
                              <span id="value1">40%</span>
                              <span id="value2">50%</span>
                            </div>
                            <div class="valores_conversion">
                              <div class="progress">
                                <div class="progress-bar bg-green" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-blue" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            <div class="d-flex flex-row justify-content-around">
                              <span id="p_usado">presupuesto usuado</span>
                              <span id="p_programado">presupuesto programado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row graficas">
                <div class="col-5 my-3">
                  <div class="box-shadow">
                    <h4 class="uppercase"><img src="img/iconos/categorias_presupeusto.png" alt="Metricas" class="img_icons">Categorias</h4>
                    <div class="row pt-4 categorias_presupuesto">
                      <div class="col-lg-6 col-xl-3">
                        <a href="#" class="bg-blue categoria px-4 pt-4 pb-2 box-shadow d-flex flex-column justify-content-center">
                          <img class="mt-auto" src="img/iconos/capacitaciones_cat.svg" alt="capacitaciones">
                          <p class="text-center mt-auto mb-0">Capacitaciones</p>
                        </a>
                        <div class="icono_mas">
                          <a href="#">
                            <img src="img/iconos/flecha_derecha.svg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-xl-3 d-flex">
                        <a class="border-radius d-flex flex-column justify-content-center align-items-center more_cat" href="#">
                          +
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-7 my-3">
                    <div class="box-shadow mb-3">
                    <div class="bg-color d-flex align-items-center ">
                      <h4 class="uppercase mr-2"> <img src="img/iconos/mapeo_de_gastos.svg" alt="Metricas" class="img_icons"> Mapeo de gastos</h4>
                      <select class="form-control mb-2" id="proyectos_convertidos">
                        <option value="" disabled selected>Capacitaciones</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <canvas id="chartPresupuesto" class="bg-color grafica" height="300"></canvas>
                    <div class="icono_info">
                      <a href="#">
                        <img src="img/iconos/icono-informacion.svg" alt="">
                      </a>
                    </div>
                    </div>
                    
                </div> 
            </div>
            <div class="row">
              <div class="col-3 mt-3">
                <div class="row">
                  <div class="col-12 mb-4">
                    <div class="box-shadow">
                      <h4 class="uppercase"><img src="img/iconos/alcance.svg" alt="" class="img_icons"> Alcance</h4>
                      <div class="valores_escalamiento d-flex flex-row py-2">
                        <span id="escalamiento">
                            0%
                        </span>
                        <p>
                          <strong>+0%</strong>
                          que el mes anterior
                        </p>
                      </div>
                      <div class="icono_info">
                        <a href="#">
                          <img src="img/iconos/icono-informacion.svg" alt="">
                        </a>
                      </div>
                      <div class="icono_mas">
                        <a href="#">
                          <img src="img/iconos/flecha_derecha.svg" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="box-shadow">
                      <h4 class="uppercase"><img src="img/iconos/coste.svg" alt="" class="img_icons"> Coste</h4>
                      <div class="valores_escalamiento d-flex flex-row py-2">
                        <span id="escalamiento">
                            0%
                        </span>
                        <p>
                          <strong>+0%</strong>
                          que el mes anterior
                        </p>
                      </div>
                      <div class="icono_info">
                        <a href="#">
                          <img src="img/iconos/icono-informacion.svg" alt="">
                        </a>
                      </div>
                      <div class="icono_mas">
                        <a href="#">
                          <img src="img/iconos/flecha_derecha.svg" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 mt-3">
                  <div class="evaluacion_innovacion box-shadow d-flex flex-column">
                    <h4 class="uppercase"><img src="img/iconos/evaluacion.svg" alt="" class="img_icons"> Evaluación de innovación</h4>
                    <div class="row h-100 my-3">
                      <div class="col-xl-3 col-lg-4">
                        <div class="metricas d-flex flex-column justify-content-around px-2 py-5">
                          <span>0/10</span>
                          <h5>métricas de entrada </h5>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-4">
                        <div class="metricas d-flex flex-column justify-content-around px-2 py-5">
                          <span>0/10</span>
                          <h5>métricas de entrada </h5>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-4">
                        <div class="metricas d-flex flex-column justify-content-around px-2 py-5">
                          <span>0/10</span>
                          <h5>métricas de entrada </h5>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-4">
                        <div class="metricas resultado px-2 py-5">
                          <p>Tu sistema <br>de innovación está en : </p>
                          <span>0/10</span>
                        </div>
                      </div>
                    </div>
                    <div class="icono_info">
                      <a href="#">
                        <img src="img/iconos/icono-informacion.svg" alt="">
                      </a>
                    </div>
                  </div>
              </div>
              <div class="col-3 mt-3 ">
                  <div class="box-shadow d-flex flex-column calidad_presupuesto">
                    <h4 class="uppercase"><img src="img/iconos/calidad.svg" alt="" class="img_icons"> Calidad</h4>
                    <div class="row align-items-center h-100">
                      <div class="col-xl-6 col-lg-6 col-md-12 d-flex flex-column align-items-center border-right border-dark my-3">
                        <span class="calidad_relacion mb-2">0/ 10</span>
                        <h5>Proyectos</h5>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 d-flex flex-column align-items-center my-3">
                        <span class="calidad_relacion mb-2">0/ 10</span>
                        <h5>Equipos</h5>
                      </div>
                      <div class="col-12 d-flex justify-content-center">
                        <span>Valoracion Promedio</span>
                      </div>
                    </div>
                    <div class="icono_info">
                      <a href="#">
                        <img src="img/iconos/icono-informacion.svg" alt="">
                      </a>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="btn-flotante"  data-toggle="modal" data-target="#modalPresupuesto">
          <img src="img/iconos/boton_reporte.svg" alt="Descargar Reporte">
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalPresupuesto" tabindex="-1" role="dialog" aria-labelledby="modalPresupuestoLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center w-100 mt-3" id="modalPresupuestoLabel"><img src="img/iconos/categoria_presupuesto.png" alt=""> Categorías</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body my-3">
        <p class="text-center subtitle-form" style="width: 620px;">Distribuye tu presupuesto total en las categorías que seleccionaste anteriormente.</p>
        <div class="row">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-xl-2 col-lg-12">
                <span id="asignado">Asignado</span>
              </div>
              <div class="col-xl-2 col-lg-12">
                <span id="disponible">Disponible</span>
              </div>
              <div class="col-xl-2 col-lg-12">
                <span id="no_disponible">No disponible</span>
              </div>
            </div>
          </div>
        </div>
        <form action="#" class="form_download m-5">
        <div class="row justify-content-center slider_presupuesto">
          <div class="col-3 justify-content-start d-flex align-items-center">
            <img src="img/iconos/capacitaciones.svg" alt="">
            <span class="titulo_valores">Capacitaciones</span>
          </div>
          <div class="col-9">
            <div class="form-group capacitaciones_presupuesto d-flex flex-row align-items-center">
              <span class="min_valor">$0</span><input id="exCapacitaciones" data-slider-handle="custom" type="text"/><span class="max_valor">$1000000000</span>
            </div>
          </div>
          <div class="col-3 justify-content-start d-flex align-items-center">
            <img src="img/iconos/papeleria.svg" alt="">
            <span class="titulo_valores">Papeleria</span>
          </div>
          <div class="col-9">
            <div class="form-group papeleria_presupuesto d-flex flex-row align-items-center">
              <span class="min_valor">$0</span><input id="exPapeleria" data-slider-handle="custom" type="text"/><span class="max_valor">$1000000000</span>
            </div>
          </div>
          <div class="col-3 justify-content-start d-flex align-items-center">
            <img src="img/iconos/infraestructura.svg" alt="">
            <span class="titulo_valores">Infraestructura</span>
          </div>
          <div class="col-9">
            <div class="form-group infraestructura_presupuesto d-flex flex-row align-items-center">
              <span class="min_valor">$0</span><input id="exInfraestructura" data-slider-handle="custom" type="text"/><span class="max_valor">$1000000000</span>
            </div>
          </div>
          <div class="col-3 justify-content-start d-flex align-items-center">
            <img src="img/iconos/categorias_presupeusto.png" alt="">
            <span class="titulo_valores">Otros</span>
          </div>
          <div class="col-9">
            <div class="form-group otros_presupuesto d-flex flex-row align-items-center">
              <span class="min_valor">$0</span><input id="exOtros" data-slider-handle="custom" type="text"/><span class="max_valor">$1000000000</span>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="modal-footer mx-5 mb-4">
        <input class="Boton-a-Principal-Sin-Fondo inline" type="button" data-dismiss="modal" value="Cerrar">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <input class="Boton-a-Principal-Fondo-Blanco Boton-Creacion-Proyecto" type="button" name="Boton-Continuar" value="Ingresar">
      </div>
    </div>
  </div>
</div>



    
<?php
include("footer.php");
?>