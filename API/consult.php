<?php

//Listar Tablas Geral
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
  $res = array("inter" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $res["inter"][] = $row;
   }
  }
  echo json_encode($res);
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


//Listar Tablas por Id
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

function listarAlunoPorId($id){
  $conexao = conectaBd();
  $sql = "SELECT * FROM aluno WHERE id = $id";
  $result = executarSQL($conexao, $sql);
  $resposta = array();
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta[] = $row;
   }
  }
  echo json_encode($resposta);
}

function listarPeriodoPorId($id){
  $conexao = conectaBd();
  $sql = "SELECT * FROM periodo WHERE id = $id";
  $result = executarSQL($conexao, $sql);
  $resposta = array();
  if ($result) {
   while ($row = $result->fetch_assoc()) {
   	$resposta[] = $row;
  	}
  }
  echo json_encode($resposta);
}

function listarCursoPorId(){
  $conexao = conectaBd();
  $sql = "SELECT * FROM curso  WHERE id = $id";
  $result = executarSQL($conexao, $sql);
  $resposta = array();
  if ($result) {
   while ($row = $result->fetch_assoc()) {
   	$resposta[] = $row;
  	}
  }
  echo json_encode($resposta);
}

function listarConvenioPorId($id){
  $conexao = conectaBD();
  $sql = "SELECT * FROM convenios WHERE id = $id";
  $result = executarSQL($conexao, $sql);
  $resposta = array();
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta[] = $row;
   }
  }
  echo json_encode($resposta);
}

function listarExperienciaPorId($id){
  $conexao = conectaBd();
  $sql = "SELECT * FROM experiencias WHERE id = $id";
  $result = executarSQL($conexao, $sql);
  $resposta = array();
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    $resposta[] = $row;
   }
  }
  echo json_encode($resposta);
}


//Excluir dados
function eliminarAlunoPorId($id){
 $conexao = conectaBd();
 $sql = "DELETE FROM aluno WHERE id = $id";
 $result = executarSQL($conexao, $sql);
 if ($result) {
  echo json_encode(array('code' => 1, 'msg' => 'Produto excluído com sucesso!'));
 }else{
  echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
 }
}

function eliminarConvenioPorId($input){
 $conexao = conectaBd();
 $sql = "DELETE FROM convenios WHERE id = $input";
 $result = executarSQL($conexao, $sql);
 // if ($result) {
 //  echo json_encode(array('code' => 1, 'msg' => 'Produto excluído com sucesso!'));
 // }else{
 //  echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
 // }
}

function eliminarExperienciaPorId($id){
 $conexao = conectaBd();
 $sql = "DELETE FROM experiencias WHERE id = $id";
 $result = executarSQL($conexao, $sql);
 if ($result) {
  echo json_encode(array('code' => 1, 'msg' => 'Produto excluído com sucesso!'));
 }else{
  echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
 }
}


//Cadastros...
function inscripcaoInterc($input){
  $conexao = conectaBd();
  $dados = json_decode($input);
  $nome = $dados->nome;
  $sobrenome = $dados->sobrenome;
  $email = $dados->email;
  $curso = $dados->curso;
  $periodo = $dados->periodo;
  $sql = "INSERT INTO aluno (nome, sobrenome, email, fkCurso, fkPeriodo) VALUES ('$nome', '$sobrenome', '$email', $curso, $periodo)";
  $result = executarSQL($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Registro com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}

function novaExper($input){
  $dados = json_decode($input);
  $conexao = conectaBd();
  $author = $dados->ano;
  $exper = $dados->exper;
  $ano = $dados->ano;
  $pais = $dados->pais;
  $foto = $dados->foto;
  $sql = "INSERT INTO intercambios (author exper, ano, pais, foto) VALUES ('$author', '$exper', '$ano', '$pais', '$foto')";
  $result = executarSQL($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Registro com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}

function novoConv($input){
  $dados = json_decode($input);
  $conexao = conectaBd();
  $universidade = $dados->universidade;
  $foto = $dados->foto;
  $link = $dados->link;
  $pais = $dados->pais;
  $sql = "INSERT INTO convenios (universidade, foto, link, pais) VALUES ('$universidade', '$foto', '$link', '$pais')";
  $result = executarSQL($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Registro com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}


//Edicao de dados...
function editarConvenio($dados){
  $dados = json_decode($dados);
  print_r($dados);
  $conexao = conectaBd();
  $id = $dados->id;
  //$id = intval($id);
  $universidade = $dados->universidade;
  $foto = $dados->foto;
  $link = $dados->link;
  $pais = $dados->pais;
  $sql = "UPDATE convenios SET universidade='$universidade', foto='$foto', link='$link', pais='$pais' WHERE id = $id";
  $result = executarSQL($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Produto alterado com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}

function editarExperiencias($dados){
  $dados = json_decode($dados);
  $conexao = conectaBd();
  $id = $dados->id;
  $author = $dados->author;
  $exper = $dados->exper;
  $ano = $dados->ano;
  $pais = $dados->pais;
  $foto = $dados->foto;
  $sql = "UPDATE experiencias SET author='$author', exper='$exper', ano='$ano', pais='$pais', foto='$foto' WHERE id = $id";
  $result = executarSQL($conexao, $sql);
  if ($result) {
   echo json_encode(array('code' => 1, 'msg' => 'Produto alterado com sucesso!'));
  }else{
   echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
  }
}


//Selecao de method...
switch ($method) {
 case 'GET':
   if($acao == 'listarCurso'){
    listarCurso();
   }
   if($acao == 'listarPeriodo'){
    listarPeriodo();
   }
   if ($acao == 'intercambios') {
    listarExp();
   }
   if ($acao == 'convenio') {
    listarConv();
   }
   if ($username != "") {
    listarUsuario($username);
   }
  break;

 case 'POST':
  if ($acao == 'inscripcaoInterc') {
   inscripcaoInterc($dados);
  }
  if ($acao == 'novaExp') {
   novaExper($dados);
  }
  if ($acao == 'novoConv') {
   novoConv($dados);
  }
  break;

 case 'UPDATE':
  if ($acao == 'editExperiencias') {
   editarExperiencias($dados);
  }
  if ($acao == 'editConvenios') {
   echo json_encode($dados);
   //editarConvenio($dados);
  }
  break;

 case 'DELETE':
  //$dados = $_GET['id'];
  if ($acao == 'aluno') {
   eliminarAlunoPorId($dados);
  }
  if ($acao == 'deleteconvenio') {
   //eliminarConvenioPorId($dados);
  }
  if ($acao == 'experiencias') {
   eliminarExperienciaPorId($dados);
  }
  break;
}


?>
