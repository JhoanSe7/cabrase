<?php
include 'database.php';
include 'home_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
</head>
<body class="bg-main">
<div class="container-fluid">
    <div class="row"> &nbsp;</div>
    <div class="row">
        <div class="col-1">&nbsp</div>
        <div class="col-5 align-content-center">
            <div class="text-center"><img src="assets/images/login.png" class="img-medium" alt="login"></div>
            <?php if (isset($_SESSION)) { ?>
                <div class="alert alert-danger">
                </div>
            <?php } ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label h3">Usuario</label>
                    <input type="text" class="form-control" id="inputUsuario" name="inputUsuario" placeholder="Usuario">
                </div>
                <div class="mb-3">
                    <label for="inputClave" class="form-label h3">Contraseña</label>
                    <input type="password" class="form-control border-info" id="inputClave" name="inputClave"
                           placeholder="Contraseña">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkLogin">
                    <label class="form-check-label" for="checkLogin">Mantener sesión</label>
                </div>
                <input name="btnEntrar" type="submit" class="btn btn-info text-white h4" value="Entrar">
            </form>
        </div>
        <div class="col-5">
            <div id="animation-banner"></div>
        </div>
        <div class="col-1">&nbsp</div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.8/lottie.min.js"></script>
<script>
    const animationContainer = document.getElementById('animation-banner');
    const animationData = {
        container: animationContainer,
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/cabrase/assets/animations/banner.json'
    };
    const anim = lottie.loadAnimation(animationData);
</script>
</body>
</html>
