<?php
  require_once("config/configGeral.php");
  require_once("config/conexaoBd.php");
  $conexao = conectaBd();

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
  <script rel="javascript" type="text/js" href="static/javascript.js"></script>
  <link rel="stylesheet" type="text/css" href="static/css/style1200.css" media="screen and (max-width:1200px)">
	<link rel="stylesheet" type="text/css" href="static/css/style1024.css" media="screen and (max-width:1024px)">
  <link rel="stylesheet" type="text/css" href="static/css/style600.css" media="screen and (max-width:600px)">
	<link rel="stylesheet" type="text/css" href="static/css/style320.css" media="screen and (max-width:320px)">
 </head>

 <body>
  <div id="container">

   <div id="header">
    <div id="imgIzq">
      <img id="imgPag" src='<?= $localhost.$img?>intercambios.jpg'>
    </div>
    <div id="titulo">
     <h1>INTERCAMBIO UNINCOR</h1>
    </div>
    <div id="imgDer">
     <img id="imgLogo" src='<?=$localhost.$img?>LOGO-UNINCOR.png'>
    </div>
   </div>

   <div id="menu">
    <div id="menuIzq">
     <ul>
      <a href="?pg=home"><img id="imgMenu" src='<?=$localhost.$img?>iconoInicio1.png'></a>
      <li class="<?= ($pagina == 'convenios')?'active':'' ?>"><a href="?pg=convenios">Convenios</a></li>
      <li class="<?= ($pagina == 'formulario')?'active':'' ?>"><a href="?pg=formulario">Inscripcoes</a></li>
      <li class="<?= ($pagina == 'contato')?'active':'' ?>"><a href="?pg=contato">Contacto</a></li>
     </ul>
    </div>
    <div id="menuDer">
     <ul>
      <a href="?pg=login"><img id="imgMenu" src='<?=$localhost.$img?>login1.png'></a>
     </ul>
    </div>
   </div>

   <div id="content">
    <?php
     include("paginas/".$pagina.".php");
    ?>
   </div>

   <footer>
    <div id="footer">
     <h2>@2019 - UNINCOR</h2>
     <h3>@LuisMauricioMosqueraCifuentes</h3>
    </div>
   </footer>

  </div>
 </body>

</html>
