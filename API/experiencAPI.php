<?php
require_once("conexaoBd.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, UPDATE, PUT');
header('Access-Control-Allow-Headers: *');

function listarPeriodo(){
  $conexao = conectaBd();
  $sql = "SELECT * FROM periodo";
  $result = executarSQL($conexao, $sql);
  $resposta = array("periodo" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
   	$resposta["periodo"][] = $row;
  	}
  }
  echo json_encode($resposta);
}

function listarCurso(){
  $conexao = conectaBd();
  $sql = "SELECT * FROM curso";
  $result = executarSQL($conexao, $sql);
  $resposta = array("curso" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
   	$resposta["curso"][] = $row;
  	}
  }
  echo json_encode($resposta);
}

function listarExp(){
  $conexao = conectaBd();
  $sql = "SELECT * FROM intercambios";
  $result = executarSQL($conexao, $sql);
  $resposta = array("exp" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta["exp"][] = $row;
   }
  }
  echo json_encode($resposta);
}


function listarUsuario($username){
  $conexao = conectaBd();
  $sql = "SELECT * FROM user WHERE username = '$username'";
  $result = executarSQL($conexao, $sql);
  $resposta = array("user" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
   	$resposta["user"][] = $row;
  	}
  }
 echo json_encode($resposta);
}

function listarAluno(){
  $conexao = conectaBd();
  $sql = "SELECT * FROM aluno";
  $result = executarSQL($conexao, $sql);
  $resposta = array("alunos" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta["alunos"][] = $row;
   }
  }
  echo json_encode($resposta);
}

function listarConv(){
  $conexao = conectaBd();
  $sql = "SELECT * FROM convenios";
  $result = executarSQL($conexao, $sql);
  $resposta = array("convenios" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta["convenios"][] = $row;
   }
  }
  echo json_encode($resposta);
}


function listarAlunoPorId($id){
  $conexao = conecta_bd();
  $sql = "SELECT * FROM aluno WHERE id = $id";
  $result = executar_sql($conexao, $sql);
  $resposta = array("alunos" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta["alunos"][] = $row;
   }
  }
  echo json_encode($resposta);
}

function listarConvenioPorId($id){
  $conexao = conecta_bd();
  $sql = "SELECT * FROM convenios WHERE id = $id";
  $result = executar_sql($conexao, $sql);
  $resposta = array("convenios" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta["convenios"][] = $row;
   }
  }
  echo json_encode($resposta);
}

function listarExperienciaPorId($id){
  $conexao = conecta_bd();
  $sql = "SELECT * FROM experiencias WHERE id = $id";
  $result = executar_sql($conexao, $sql);
  $resposta = array("experiencias" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta["experiencias"][] = $row;
   }
  }
  echo json_encode($resposta);
}

//Excluir produto, de acordo com ID
function eliminarAlunoPorId($id){
 $conexao = conectaBd();
 $sql = "DELETE FROM aluno WHERE id = $id";
 $result = executar_sql($conexao, $sql);
 if ($result) {
  echo json_encode(array('code' => 1, 'msg' => 'Produto excluído com sucesso!'));
 }else{
  echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
 }
}

function eliminarConvenioPorId($id){
 $conexao = conectaBd();
 $sql = "DELETE FROM convenios WHERE id = $id";
 $result = executar_sql($conexao, $sql);
 if ($result) {
  echo json_encode(array('code' => 1, 'msg' => 'Produto excluído com sucesso!'));
 }else{
  echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
 }
}

function eliminarExperienciaPorId($id){
 $conexao = conectaBd();
 $sql = "DELETE FROM experiencias WHERE id = $id";
 $result = executar_sql($conexao, $sql);
 if ($result) {
  echo json_encode(array('code' => 1, 'msg' => 'Produto excluído com sucesso!'));
 }else{
  echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
 }
}

function inscripcaoInterc($input){
  $dados = json_decode(json_encode($input), true);
  $conexao = conectaBd();
  $nome = $dados->{"nome"};
  $sobrenome = $dados->sobrenome;
  $email = $dados->email;
  $curso = $dados->curso;
  $periodo = $dados->periodo;
  $sql = "INSERT INTO produto (nome, sobrenome, email, fkCurso, fkPeriodo) VALUES ('$nome', '$sobrenome', '$email', $curso, $periodo)";
  $result = executarSQL($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Registro com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}

function novaExper($input){
  $dados = json_decode(json_encode($input), true);
  $conexao = conectaBd();
  $author = $dados->{"ano"};
  $exper = $dados->exper;
  $ano = $dados->ano;
  $pais = $dados->pais;
  $foto = $dados->foto;
  $sql = "INSERT INTO produto (author exper, ano, pais, foto) VALUES ('$author', '$exper', '$ano', '$pais', '$foto')";
  $result = executarSQL($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Registro com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}


function editarConvenio($dados, $id){
  $dados = json_decode($dados);
  $conexao = conecta_bd();
  $universidade = $dados->universidade;
  $foto = $dados->foto;
  $link = $dados->link;
  $pais = $dados->pais;
  $sql = "UPDATE convenios SET universidade='$universidade', foto='$foto', link='$link', pais='$pais' WHERE id = $id";
  $result = executar_sql($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Produto alterado com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}

function editarExperiencias($dados, $id){
  $dados = json_decode($dados);
  $conexao = conecta_bd();
  $is = $dados->id;
  $author = $dados->author;
  $exper = $dados->exper;
  $ano = $dados->ano;
  $pais = $dados->pais;
  $foto = $dados->foto;
  $sql = "UPDATE experiencias SET id='$id', author='$author', exper='$exper', ano='$ano', pais='$pais', foto='$foto' WHERE id = $id";
  $result = executar_sql($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Produto alterado com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}


if($_SERVER['REQUEST_METHOD'] == 'GET'){
 if(isset($_GET["acao"])){
  $acao = $_GET["acao"];
  if($acao == 'listarCurso'){
   listarCurso();
  }
  if($acao == 'listarPeriodo'){
   listarPeriodo();
  }
  if ($acao == 'exper') {
   listarExp();
  }elseif ($acao == 'convenio') {
   listarConv();
  }
 }elseif(isset($_GET["login"])){
   $username = $_GET["login"];
   listarUsuario($username);
 }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $dados = $_POST;
 $acao = $_GET["acao"];
 if ($acao == 'inscripcaoInterc') {
  inscripcaoInterc($dados);
 }elseif ($acao == 'novaExp') {
  inscripcaoInterc($dados);
 }
}

if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
 $dados = $_POST;
 $acao = $_GET["acao"];
 if ($acao == 'aluno') {
  eliminarAlunoPorId($dados);
 }elseif ($acao == 'convenios') {
  eliminarConvenioPorId($dados);
 }elseif ($acao == 'experiencias') {
  eliminarExperienciaPorId($dados);
 }
}

if($_SERVER['REQUEST_METHOD'] == 'UPDATE'){
 $dados = $_POST;
 $acao = $_GET["acao"];
 if ($acao == 'experiencias') {
  eliminarAlunoPorId($dados);
 }elseif ($acao == 'convenios') {
  eliminarConvenioPorId($dados);
 }
}

// }elseif($acao == 'listarProdutosPorId'){
//  $id = $_GET['idProduto'];
//  listarProdutosPorId($id);
// }elseif($acao == 'listarProdutosPorNome'){
//  $nome = $_GET['nomeProduto'];
//  listarProdutosPorNome($nome);
// }elseif($acao == 'cadastrarProduto'){
//  $dados = file_get_contents("php://input");
//  cadastrarProduto($dados);
// }elseif($acao == 'excluirProdutoPorId'){
//  $id = $_GET['idProduto'];
//  excluirProdutoPorId($id);
// }elseif($acao == 'editarProduto'){
//  $id = $_GET['idProduto'];
//  $dados = file_get_contents("php://input");
//  editarProduto($dados, $id);
// }

?>
