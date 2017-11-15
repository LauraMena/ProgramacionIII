<?php

    include 'MainService.php'; //se incluye la clase abstracta, para poder 
    include 'UserService.php';

   
    class Server extends MainService {

        private $userService; //referencia a un objeto

        //Constructor

        function __construct() {
            $this->userService = new UserService(); // creacion del objeto userName
        }

        public function login($username, $password) {
            $entrada = $this->userService->validate($username, $password);

            if ($entrada) {
                $_SESSION['usuario']=$username;
                header("Location: TodoList.php");

                exit;
            } else {
                echo 'Usuario no válido';
            }
        }

        protected function error() {
            
        }

        protected function message() {
            
        }

    }
    