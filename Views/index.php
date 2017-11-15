<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php
                const TITLE = "Login";
                echo TITLE;
            ?></title>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require_once '../templates/header.php'; ?>


        <h1 style="text-align: center; margin-top: 50px;">Gestion de Socios</h1>
        <div class="login">

            <form action="server_login.php" method="post">
                <!--redirige a la página server_login.php y crea campos de entrada-->
                

                <div><input type="text" name="username" autofocus placeholder="Username"></div>

                <div><input type="password" name="password" placeholder="Password"></div>

                <div><input class="submit" type="submit" value="Log in"></div>

            </form>

        </div>

        <?php require_once '../templates/footer.php'; ?>
    </body>
</html>
