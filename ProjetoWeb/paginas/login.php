<div id="login">
 <h3>LOGIN</h3>
 <img id="imgPag" src='<?= $localhost.$img?>login.png'>
 <form  action="?pg=admin" class="form-group" method="POST" enctype="multipart/form-data">
   <p>Usuario:
   <input type="text" name="usuario" id="usuario" class="form-control"></p>
   <p>Senha:
   <input type="text" name="senha" id="senha" class="form-control"></p><br><br>
   <p><input type="submit" name="enviar" value="Enviar"></p>
 </form>
</div>
