<body>
<h1 class="shadows verde text-center">Tablero de control</h1>

<h1 class="text-succes">Bienvenido <?php echo $this->user->usuario; ?></h1>  <h1 claass="text-danger"><a href="<?php echo site_url('welcome/logout'); ?>">Salir</a></h1>
<ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="/software2/index.php/inscribir/verusuario">Listar todos los usuarios</a></li>
  <li><a href="/software2/index.php/welcome/edit">Modificar usuarios</a></li>
  <li><a href="/software2/index.php/welcome/borrar">Eliminar usuarios</a></li>
</ul>

<img class="profile-img center-block  text-center" src="http://localhost/software2/img/image1.jpg"
                    alt="">
</body>
	</html>

