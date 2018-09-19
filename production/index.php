<?php
  $page_title = "Inicio";
  $page = 'inicio';
  include('include/header.php');

?>
<body>
      <div class="right_col" role="main" style="min-height: 727px;">
        <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <br>
                  <div class="row">
                    <div id="ContentAlerts" class="col-md-12"></div>
                    </div>
                    <div>
                      <div class="col-xs-12" style="padding-bottom:20px;">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="text-center">
                            <a href="asignatura.php"><h2 style="color:#199470;">Asignaturas</h2></a>
                            <img src="images/asignatura.png" width="85%">
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="text-center">
                            <a href="/Docentes"><h2 style="color:#199470;">Docente</h2></a>
                            <img src="images/docente.png" width="85%">
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="text-center">
                            <a href="/Grupos"><h2 style="color:#199470;">Grupos</h2></a>
                            <img src="images/grupo.png" width="85%">
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12" style="padding-bottom:25px;">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="text-center">
                            <a href="/GrupoEstudiantes"><h2 style="color:#199470;">Estudiantes</h2></a>
                            <img src="images/estudiantes.png" width="85%">
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="text-center">
                            <a href="/HorarioAsesorias"><h2 style="color:#199470;">Horarios de Asesorías</h2></a>
                            <img src="images/asesoria.png" width="85%">
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="text-center">
                            <a href="/Reportes/ListadoEstudiantes"><h2 style="color:#199470;">Reporte</h2></a>
                            <img src="images/reportes.png" width="85%">
                          </div>
                        </div>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       </div>

  <?php
    include('include/footer.php');
 
  ?>
