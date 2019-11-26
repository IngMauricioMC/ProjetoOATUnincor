<?php
require_once("conexaoBd.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, *');

$method = "";
$acao = "";
$username = "";
$dados = "";

$method = $_SERVER['REQUEST_METHOD'];

if(isset($_GET["acao"])){
 $acao = $_GET["acao"];
}else{
 $username = $_GET["login"];
}

$dados = file_get_contents("php://input");
//echo json_encode($dados);

include('consult.php');

?>
