<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROYECTO MT </title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- estilos css -->
    <link href="css/custom.min.css" rel="stylesheet">

<!-- Barra de menu izquierdo-->
<?php
include 'partes_del_menu/menu_vertical_izquierda.php';
?>

  <!-- Donde se mostrara todo el contenido de cada 
      de cada modulo-->
</div>
  <?php
  $recibe_pagina=$_GET['pagina'];
  ?>
</div> 

 <!-- /menu footer buttons -->
 <?php
include 'partes_del_menu/footer_menu.php';
include 'partes_del_menu/menu_horizontal_superior.php';
?>
<!-- parte del contenido -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                <div class="clearfix">

<!--contenido que se va a presentar en  -->
 <?php
 switch ($recibe_pagina){ 
  case "nuevorecurso":
    include ("procesos/nuevorecurso.php"); 
    break;
  case "verproceso":
    include ("procesos/verproceso.php"); 
    break;
  case "nuevoproceso":
    include ("procesos/nuevoproceso.php"); 
    break; 
  case "nuevoempleado":
    include ("empleado/nuevoempleado.php"); 
    break; 
  default:
  include ("principal.php"); 
    break;
}
 ?>
</div>       
  </div>
    </div>
      </div>
        </div>
          </div>
            </div>
              </div>
<footer>
    <div >
      Los estudiantes de Ingenieria  mas Gays </a> 
    </div>
</footer>
  <script   src="https://code.jquery.com/jquery-2.2.4.min.js" 
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FastClick -->
        <script src="js/jquery.tagsinput.js"></script>
    <!-- Custom Theme Scripts -->
  <script src="js/custom.min.js"></script>
  </body>
</html>
