<?php
$id = $_GET['id'];
if (isset($_POST['enviar'])) {
	$universidade = $_POST['universidade'];
	$foto = $_POST['foto'];
	$pais = $_POST['pais'];
	$link = $_POST['link'];
	$sql = "UPDATE convenios SET universidade='$universidade',foto='$for',pais='$pais',link='$link'";
	$sql .= " WHERE id = " . $id;
	executarSQL($conexao, $sql);
}
if($_GET['acao'] == 'remover'){
	$idProduto = $_GET['id'];
	$sql = "DELETE FROM convenios WHERE id = " . $idProduto;
	$result = executarSQL($conexao, $sql);
	if($result === TRUE){
		echo "Convenio excluído com sucesso!";
	}
}
?>
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
   <p><a href="?pg=novConv&acao=novConv&id=<?= $row->id ?>">Editar</a></p>
   <p><a href="?pg=convAdmin&id=<?= $row->id ?>" onclick="return confirm('Desejar remover este item?');">Remover</a></p>
 </div>
<?php
   }
  $result->close();
 }
?>
</div>
