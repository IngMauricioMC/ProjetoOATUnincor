<h2>EXPERIENCIAS INTERNACIONALES</h2>
<div id="containerExpInt">
    <?php
    $sql = "SELECT * FROM intercambios";
    $result = executarSQL($conexao, $sql);
    if ($result) {
     while ($row = $result->fetch_object()) {
    ?>
    <div id="experiencia">
     <h3><?=$row->pais?> - <?=$row->ano?></h3>
     <img id="imgExp" src='<?=$localhost.$img.$row->foto?>' alt="">
     <h4><?=$row->author?></h4>
     <p><?=$row->exper?></p>
    </div>
    <?php
     }
     $result->close();
    }
    ?>
</div>
