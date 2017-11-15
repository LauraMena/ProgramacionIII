<?php

  
    /* La clase UserService contiene el metodo de validacion */
    class UserService {
//arreglo con los usuarios y contraseñas registrados previamente
        private $listUser = [
            "Usuario1" => "1111",
            "Usuario2" => "2222"
        ];

        public function validate($user, $pass) {
            //$exits = $this->validateAccount($user, $pass);
            if (isset($this->listUser[$user]) && $this->listUser[$user] == $pass) {
                return true;
            }
            return false;
        }

        private function validateAccount($user, $pass) {

            return true;
        }

    }
    