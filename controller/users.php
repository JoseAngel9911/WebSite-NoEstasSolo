<?php
    require '../model/crud_users.php';

    class Users{
        // Declaracion de variables
        private $iID;
        private $sName;
        private $sAccount;    
        private $sPassword;

        public function setId($iIDP){
            $this->iID = $iIDP;
        }
        public function setName($sNamP){
            $this->sName = $sNamP;
        }
        public function setAccount($sAcP){
            $this->sAccount = $sAcP;
        }
        public function setPassword($sPassP){
            $this->sPassword = $sPassP;
        }

        public function checkLogin(){

            $objQuery = new CrudUsers;
            $response = $objQuery->selectUsers($this->sAccount, $this->sPassword);
            
            if($response){
                return $response;
            }else{
                return false;
            }
        }

    }

?>