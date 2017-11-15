<?php
session_start();
if (isset($_SESSION['usuario'])){
    echo 'Contraseña válida. Puedes comenzar,'. S_SESSION['usuario'].'<br>';
}
?>
<a href="logaut.php"> Cerrar Sesion</a>
