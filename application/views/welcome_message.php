<body>

    <h1>Inicia sesi&oacute;n</h1>

<?php if(@$error_login): ?>
    Error en el usuario o contrase&ntilde;a.
    <br />
<?php endif; ?>

<?php echo @validation_errors(); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Ingresar a SutagoGames</h1>
            <div class="account-wall">
                <img class="profile-img center-block  text-center" src="http://localhost/software2/img/image1.jpg"
                    alt="">
                    <br>
                    <br>
                <form class="form-signin" method="post">
                <input type="text" class="form-control" name="usuario" value="<?php echo @$_POST['usuario']; ?>" placeholder="Usuario" required autofocus>
                <input type="password" class="form-control" name="pass" value="<?php echo @$_POST['pass']; ?>"  placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block verde" type="submit">
                    Ingresar</button>

                <a href="#" class="pull-right need-help">¿Necesita ayuda? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="/software2/index.php/inscribir/index" class="text-center new-account">Crear una cuenta </a>
        </div>
    </div>
</div>
</body>
</html>