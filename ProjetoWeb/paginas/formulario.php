<div id="inscripcao">
 <h2>INSCRIPCAO INTERCAMBIO</h2>
 <form id="formInscrip" class="form-group" action="?pg=confirFormulario" method="post">
  <p>Nome: <input type="text" name="nome" id="nome" class="form-control"></p>
  <p>Sobrenome: <input type="text" name="sobrenome" id="sobrenome" class="sobrenome"></p>
  <p>Email: <input type="text" name="email" id="email" class="email"></p>
  <p>Curso:
   <div id="curFor" class="custom-select" style="width:150px;">
     <select>
      <?php
     		$sql = "SELECT * FROM curso";
     		$result = executarSQL($conexao, $sql);
     		if ($result) {
     		 while ($row = $result->fetch_object()) {
		    	?>
      <option id="curso" name="curso" value='<?= $row->id ?>'><?= $row->nome ?></option>
      <?php
        }
        $result->close();
       }
      ?>
     </select>
   </div>
  </p>
  <p>Periodo:
   <div id="perFor" class="custom-select" style="width:150px;">
     <select>
      <?php
     		$sql = "SELECT * FROM periodo";
     		$result = executarSQL($conexao, $sql);
     		if ($result) {
     		 while ($row = $result->fetch_object()) {
		    ?>
      <option id="periodo" name="periodo" value='<?= $row->id ?>'><?= $row->nome ?></option>
      <?php
        }
        $result->close();
       }
      ?>
     </select>
   </div>
  </p>
  <p><input type="submit" name="enviar" value="Enviar"></p>
 </form>
</div>
