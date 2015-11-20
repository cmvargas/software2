<body>
	<div class="shadows verde grande text-center"><h1>Listado de todo los usuarios</h1></div>
    <h1 claass="text-danger"><a href="<?php echo site_url('welcome/logout'); ?>">Salir</a></h1>

	<?php 


      foreach( $usuario->result() as $row){ 
      echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                <div class='panel panel-success'>
                    <div class='panel-heading'>
                    ";
                    echo "</div>

                    <div class='panel-body'>
                        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>";
                        echo "<h4><strong>Nombre: <strong>";echo $row->nombre;echo "</h4>
                        <h4><strong>Apellido: </strong>";echo $row->apellido;echo "</h4>
                        <h4><strong>Usuario: </strong>";echo $row->usuario;echo "</h4>
                        <h4><strong>Eda: </strong>";echo $row->edad;echo "</h4>
                        <h4><strong>Correo: </strong>";echo $row->correo;echo "</h4>
                        <h4><strong>Tipo de usuario: </strong>";echo $row->tuser;echo "</h4>
                        </div>
                       
                    </div>
                </div>
            </div>";
      }  ?>

</body>

</html>