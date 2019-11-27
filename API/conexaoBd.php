<?php

 //Conexao com o BD
 function conectaBd($host='localhost',$usuario='root',$senha='',$bd='OATUnincor'){
  $mysqli = null;
  $mysqli = new mysqli($host, $usuario, $senha, $bd);
  if($mysqli -> connect_error){
   die('Connect Error('.$mysqli->connect_errno.')'.$mysqli->connect_error);
  }
  return $mysqli;
 }

 function executarSQL($conexao, $sql){
  $result_query = $conexao->query($sql);
  return $result_query;
 }

?>
