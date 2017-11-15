<?php
session_start();
if (isset($_SESSION['usuario'])){
    echo 'Soy todo list, dime que quieres hacer... '. S_SESSION['usuario'].'<br>';
}
?>
<a href="logaut.php"> Cerrar Sesion</a>
