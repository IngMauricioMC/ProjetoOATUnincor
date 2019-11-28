<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['enviar'])) {
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$fkCurso = $_POST["curso"];
 $fkPeriodo = $_POST["periodo"];
	$sql = "INSERT INTO produto (nome,valor,imagem,descricao) VALUES ('$nome','$sobrenome','$email',$fkCurso,$fkPeriodo)";
	executarSQL($conexao, $sql);
	echo "Inscripcao realizada com sucesso!";
}
?>
