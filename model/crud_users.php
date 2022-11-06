<?php

    require 'connection.php';

    class CrudUsers{
        
        public function selectUsers($accountUsersP,$passUserP){

            // $sCrud = "SELECT * FROM users WHERE users_accounts='". $accountUsersP."' AND passwords= '".$passUserP."'";

            $sCrud = "SELECT users.id, users.name_user, users.lastname_user, users.users_accounts, users.phone, users.passwords, type_users.type_user FROM users INNER JOIN type_users ON users.type_user = type_users.id  WHERE users.users_accounts = '".$accountUsersP.
            "' AND users.passwords='".$passUserP."'";

            $objConnect = $this->generatedConnection();

            if($objConnect){
                $response = $objConnect->query($sCrud);
                return $response;
            }else{
                return false;
            }

        }

        public function generatedConnection(){
            $connect = new Connection;
            $connecting = $connect->setConnect();
            return $connecting;
        }

    }
?>