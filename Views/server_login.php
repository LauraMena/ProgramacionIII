<?php

    include './Controllers/Server.php';


    $username = $_POST['username'];
//variable global y almacena en $username
    $password = $_POST['password'];


    $objectServer = new Server();

    $objectServer->login($username, $password);



//crea el objeto server y llama al login pasando los parametros
    






    