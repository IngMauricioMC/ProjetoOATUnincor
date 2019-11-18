<!DOCTYPE html>
<html lang="en" dir="ltr">

 <head>
  <meta charset="utf-8">
  <title>INTERCAMBIO UNINCOR</title>
 </head>

 <body>
  <div class="countainer">
   <div class="header">
    <img src="" alt="">
    <label>INTERCAMBIO UNINCOR</label>
   </div>

   <div class="menu">

    <!-- <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="<?= ($pagina == 'inicio')?'active':'' ?>"><a href="?pg=inicio">Home</a></li>
        <li class="<?= ($pagina == 'cadastro')?'active':'' ?>"><a href="?pg=cadastro">Cadastro</a></li>
        <li class="<?= ($pagina == 'listar')?'active':'' ?>"><a href="?pg=listar">Listar</a></li>
      </ul>
    </div> -->

   </div>

   <div class="content">
    <div class="menuLat">

    </div>
    <div class="context">
     <?php
      include("paginas/".$pagina.".php");
     ?>
    </div>
   </div>

  </div>
 </body>

 <footer>
  <div class="footer">
   <label class="">UNINCOR</label>
  </div>
 </footer>
</html>
