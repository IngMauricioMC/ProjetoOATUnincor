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
$sql = "SELECT * FROM convenios WHERE id = " . $id;
$result = executarSQL($conexao, $sql);
$conv = null;
if (!($conv = $result->fetch_object())) {
	echo "Problema ao buscar convenio.";
}
?>
<h1>Formulário de Alteração</h1>

<form action="" class="form-group" method="POST" enctype="multipart/form-data">
<p>Universidade <input type="text" name="universidade" value="<?= $conv->universidade ?>" id="universidade" class="form-control">
</p>
<p>Foto: <input type="text" name="foto" value="<?= $conv->foto ?>" class="form-control" id="foto">
</p>
<p>Pais: <input type="text" class="form-control" name="pais" value="<?= $conv->pais ?>"  id="pais">
</p>
<p>Link: <input type="text" class="form-control" name="link" value="<?= $conv->link ?>"  id="pais"></p>
<p><input type="submit" name="enviar" value="Enviar"></p>
</form>
