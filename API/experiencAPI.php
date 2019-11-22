<?php
function listarPeriodo(){
  require_once("conexaoBd.php");
  $conexao = conectaBd();
  $sql = "SELECT * FROM periodo";
  $result = executarSQL($conexao, $sql);
  $resposta = array("Periodo" => array());
  echo json_encode($resposta);
}

function listarCurso(){
  require_once("conexaoBd.php");
  $conexao = conectaBd();
  $sql = "SELECT * FROM curso";
  $result = executarSQL($conexao, $sql);
  $resposta = array("Curso" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
   	$resposta["Curso"][] = $row;
  	}
  }
  echo json_encode($resposta);
}

function listarExp(){
  require_once("conexaoBd.php");
  $conexao = conectaBd();
  $sql = "SELECT * FROM experiencias";
  $result = executarSQL($conexao, $sql);
  $resposta = array("Experiencias" => array());
  if ($result) {
   while ($row = $result->fetch_assoc()) {
    if ($row['imagem'] != ''){
     $row['imagem'] = 'http://localhost/static/imgAPI/' . $row['imagem'];
    }
    $resposta["Produtos"][] = $row;
   }
  }
  echo json_encode($resposta);
}


// Excluir produto, de acordo com ID
// function excluirProdutoPorId($id){
//   $conexao = conecta_bd();
//   $sql = "DELETE FROM produto WHERE id = $id";
//   $result = executar_sql($conexao, $sql);
//   if ($result) {
//    echo json_encode(array('code' => 1, 'msg' => 'Produto excluído com sucesso!'));
//   }else{
//    echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
//   }
// }
//
//
// // Lista um produto cadastrado, filtrando pelo ID
// function listarProdutosPorId($id){
//   $conexao = conecta_bd();
//   $sql = "SELECT * FROM produto WHERE id = $id";
//   $result = executar_sql($conexao, $sql);
//   $resposta = array("Produtos" => array());
//   if ($result) {
//    while ($row = $result->fetch_assoc()) {
//     // $respostaAux = array();
//     // $respostaAux['Codigo'] = $row->id;
//     // $respostaAux['NomeProduto'] = $row->nome;
//     $resposta["Produtos"][] = $row;
//    }
//   }
//   echo json_encode($resposta);
// }
//
//
// // Lista um produto cadastrado, filtrando pelo Nome
// function listarProdutosPorNome($nome){
//   $conexao = conecta_bd();
//   $sql = "SELECT * FROM produto WHERE nome LIKE '$nome%'";
//   $result = executar_sql($conexao, $sql);
//   $resposta = array("Produtos" => array());
//   if ($result) {
//    while ($row = $result->fetch_assoc()) {
//     // $respostaAux = array();
//     // $respostaAux['Codigo'] = $row->id;
//     // $respostaAux['NomeProduto'] = $row->nome;
//     $resposta["Produtos"][] = $row;
//    }
//   }
//   echo json_encode($resposta);
// }
//
//
// // Cadastrar um produto
// function inscripcaoInterc($dados){
//   $dados = json_decode($dados);
//   $conexao = conecta_bd();
//   $nome = $dados->nome;
//   $sobrenome = $dados->spbrenome;
//   $email = $dados->email;
//   $sql = "INSERT INTO produto (nome, sobrenome, email) VALUES ('$nome', '$sobrenome', '$email')";
//   $result = executar_sql($conexao, $sql);
//   if ($result) {
//    echo json_encode(array('code' => 1, 'msg' => 'Registro com sucesso!'));
//   }else{
//    echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
//   }
// }
//
//
// // Editar um produto
// function editarProduto($dados, $id){
//   $dados = json_decode($dados);
//   $conexao = conecta_bd();
//   $nome = $dados->nome;
//   $descricao = $dados->descricao;
//   $valor = $dados->valor;
//   $sql = "UPDATE produto SET nome='$nome', descricao='$descricao', valor=$valor WHERE id = $id";
//   $result = executar_sql($conexao, $sql);
//   if ($result) {
//    echo json_encode(array('code' => 1, 'msg' => 'Produto alterado com sucesso!'));
//   }else{
//    echo json_encode(array('code' => 0, 'msg' => 'Erro!'));
//   }
// }

$acao = $_GET["acao"];

if($acao == 'listarCurso'){
 listarCurso();
}elseif($acao == 'listarPeriodo'){
 listarPeriodo();
}elseif ($acao == 'experiencias') {
 listarExp();
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
