
 <body>

 	 <div class="shadows verde grande text-center"><h1>Editar Usuario</h1></div>
    <h1 claass="text-danger"><a href="<?php echo site_url('welcome/logout'); ?>">Salir</a></h1>
 <form name="editar" action="http://localhost/software2/index.php/welcome/editar" method="POST">
 	<div class="input-group input-group-lg derecha izquierda">
 

 <span class="input-group-addon" id="sizing-addon1">Nombre: <input name="nombre" class="form-control" value="<?=$usuario[0]->nombre?>"  type="text" aria-describedby="sizing-addon1"/></span>
</div>
 <div class="input-group input-group-lg derecha izquierda">

 <span class="input-group-addon" id="sizing-addon1">Apellido: <input name="apellido"  class="form-control" value="<?=$usuario[0]->apellido?>" type="text" aria-describedby="sizing-addon1"/></span>
 </div>
 <div class="input-group input-group-lg derecha izquierda">

 <span class="input-group-addon" id="sizing-addon1">usuario:<input name="usuario" class="form-control" value="<?=$usuario[0]->usuario?>" type="text" aria-describedby="sizing-addon1"/></span>
 </div>
 <div class="input-group input-group-lg derecha izquierda">

 <span class="input-group-addon" id="sizing-addon1">edad: <input name="edad" class="form-control" value="<?=$usuario[0]->edad?>" type="text" aria-describedby="sizing-addon1"/></span>
 </div>
 <div class="input-group input-group-lg derecha izquierda">

 <span class="input-group-addon" id="sizing-addon1">pass: <input name="pass"  class="form-control" value="<?=$usuario[0]->pass?>" type="text" aria-describedby="sizing-addon1"/></span>
 </div>
 <div class="input-group input-group-lg derecha izquierda">

 <span class="input-group-addon" id="sizing-addon1">correo: <input name="correo" class="form-control" value="<?=$usuario[0]->correo?>" type="text" aria-describedby="sizing-addon1"/></span>
 </div>
 <div class="input-group input-group-lg derecha izquierda">

 <span class="input-group-addon" id="sizing-addon1">Tipo de usuario: <input name="tuser" class="form-control" value="<?=$usuario[0]->tuser?>" type="text" aria-describedby="sizing-addon1"/></span>
 </div>
 
 
 <input type="submit" value="Editar" class="btn btn-primary btn-lg btn-block text-center" />
 </form>
</div>
 </body>
</html>