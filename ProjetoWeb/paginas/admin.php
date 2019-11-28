<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['enviar'])) {
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
  $sql = "SELECT * FROM user";
  $result = executarSQL($conexao, $sql);
  if ($result) {
      while ($row = $result->fetch_object()) {
       if($row->username == $usuario && $row->password == $senha){
?>
<div id="admin">
 <h2>BEM-VINDO!</h2>
 <h3>Admin</h3>
 <div id="optAdmin">
  <form action="?pg=convAdmin" method="post">
   <button type="submit" name="button" onclick="?pg=home">CONVENIOS</button>
  </form>
  <br>
  <!-- <form action="?pg=expAdm" method="post">
   <button type="submit" name="button" onclick="">EXPERIENCIAS</button>
  </form>
  <br>
  <form action="?pg=regAdm" method="post">
   <button type="submit" name="button" onclick="">ALUNOS REGISTRADOS</button>
  </form> -->
 </div>
</div>
<?php
      }
     }
   }
 }
?>
