<?php
if (isset($_SESSION)) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
</head>
<body>
<div class="row bg-info h-25">&nbsp;</div>
<div class="row">
    <div class="col-1 bg-info vh-100">&nbsp;</div>
    <div class="col-auto h1">Bienvenido</div>
</div>
</body>
</html>