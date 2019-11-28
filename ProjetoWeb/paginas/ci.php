<div id="internacional">
 <h2>CONVENIOS INTERNACIONALES</h2>
<?php
$sql = "SELECT * FROM convenios";
		$result = executarSQL($conexao, $sql);
		if ($result) {
     while ($row = $result->fetch_object()) {
?>
 <div id="universidadesInt">
  <h3><?= $row->pais?></h3>
  <img id="imgPag" src='<?= $localhost.$img.$row->foto ?>'>
  <h4><?= $row->universidade ?></h4>
  <p><label href='<?= $row->link ?>'>Link</label></p>
 </div>
<?php
   }
  $result->close();
 }
?>
</div>
