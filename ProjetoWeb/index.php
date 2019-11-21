<?php
  require_once("config/conexaoBd.php");
  $conexao = conectaBd();
  // require_once("config/config_geral.php");
  $pagina = 'inicio';
  if(isset($_GET['pg'])){
    $pagina = $_GET['pg'];
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

 <head>
  <meta charset="utf-8">
  <title>INTERCAMBIO UNINCOR</title>
  <link rel="stylesheet" type="text/css" href="static/css/style.css">
 </head>

 <body>
  <div id="container">

   <div id="header">
    <div id="imgIzq">
      <img id="imgPag" src="static/img/unincor.jpg">
    </div>
    <div id="titulo">
     <h1>INTERCAMBIO UNINCOR</h1>
    </div>
    <div id="imgDer">
     <img id="imgLogo" src="static/img/logoUnincor.png">
    </div>
   </div>

   <div id="menu">
    <ul>
     <li class="<?= ($pagina == 'home')?'active':'' ?>"><a href="?pg=home">Home</a></li>
     <li class="<?= ($pagina == 'convenios')?'active':'' ?>"><a href="?pg=convenios">Convenios</a></li>
     <li class="<?= ($pagina == 'formulario')?'active':'' ?>"><a href="?pg=formulario">Inscripcoes</a></li>
     <li class="<?= ($pagina == 'contacto')?'active':'' ?>"><a href="?pg=contacto">Contacto</a></li>
    </ul>
   </div>

   <div id="content">

    <div id="context">
     <?php
      include("paginas/".$pagina.".php");
     ?>
    </div>

    <div id="menuLat">
     <ul>
      <center><button><a href="http://www.unincor.br/">Unincor</a></button></center>
     </ul>
    </div>

   </div>

   <footer>
    <div id="footer">
     <label class="">UNINCOR</label>
    </div>
   </footer>

  </div>
 </body>

</html>
