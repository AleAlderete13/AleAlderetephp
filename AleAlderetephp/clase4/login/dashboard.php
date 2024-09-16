<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Dashboard</title>
</head>
<body>
    <h2>Sesión Abierta</h2>
    <p>
    <?php
    if (isset($_POST['nombre'])){
        $_SESSION['nombre'] = $_POST['nombre'];
        echo "Bienvenido,: <b>". $_POST['nombre']."</b>";
    }
    else{
        if(isset($_SESSION['nombre'])){
            echo "Has iniciado Sesión como: " . $_SESSION['nombre'];
        }
        else{
            //si la sesión expira
            echo "Acceso Restringido";
        }
    }
?></p>
<br>
<p><a href="login.php"/>Ir a la pagina Inicial</p>
<br>
<p><a href='logout.php'/>Cerrar Sesión</p>
</body>
</html>
