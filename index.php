<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> 
            Veterinaria "Caninos"
        </title>
        <!--pone un icono en la pestaña-->
        <link rel="icon" href="Views/Imagen/favicon.ico" />

        <link href="Views/css/style.css" rel="Stylesheet"   type="text/css" />
    </head>
    <body>


        <?php require_once ("./Views/partials/header.php"); ?>

        <h1 style="text-align: center; margin-top: 50px;">Ingreso de Usuarios</h1>
        <div class="login">
            <form action="/Views/server_login.php" method="post">
                <!--redirige a la página server_login.php y crea campos de entrada-->

                <div><input type="text" name="username" autofocus placeholder="Username"></div><br>

                <div><input type="password" name="password" placeholder="Password"></div><br>
                

                <div><input class="submit" type="submit" value="Log in"></div>
                <br><br><br><br>

            </form>

        </div>



        <?php require_once ("./Views/partials/footer.php"); ?>