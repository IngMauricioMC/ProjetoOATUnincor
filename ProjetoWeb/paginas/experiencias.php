<h2>EXPERIENCIAS INTERNACIONALES</h2>
<div id="containerExpInt">
  <div id="experiencia">
    <?php
     $sql = "SELECT * FROM experiencias";
     $result = executarSQL($conexao, $sql);
     if ($result) {
      while ($row = $result->fetch_object()) {
    ?>
    <img src="../static/img/experienciasInterc.jpeg" alt="">
    <h3>NOMBRE</h3>
    <p>Texto de experiencia</p>
    <?php
      }
      $result->close();
     }
    ?>
  </div>
</div>
