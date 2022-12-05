<?php
    require 'users.php';

    $sUser = isset($_POST['user']) ? $_POST['user'] : '';
    $sPass = isset($_POST['pass']) ? $_POST['pass'] : '';

    $objUsers = new Users;

    $objUsers->setAccount($sUser);
    $objUsers->setPassword($sPass);

    $isLogged = $objUsers->checkLogin();

    createSesion($isLogged, $sPass);

    function createSesion($isLog, $sPassP){
        //echo 'Estoy aqui';
        // echo $isLog;
        $data = $isLog->fetch_assoc();
        // $sPassCrip = password_hash($sPassP, PASSWORD_DEFAULT, [15]);
        if($isLog->num_rows == 1){
            //echo 'Dentro del if';
            // echo $sPassP.' -- ' . $sPassCrip . ' -- ' .$data['passwords'];
            if(password_verify($sPassP, $data['passwords'])){

                session_start();
                $_SESSION['userID'] = $data['id'];
                $_SESSION['userName'] = $data['name_user'] . ' ' . $data['lastname_user'];
                $_SESSION['userAccount'] = $data['users_accounts'];
                $_SESSION['userType'] = $data['type_user'];
                $_SESSION['userPhone'] = $data['phone'];
                $_SESSION['userPass'] = $data['passwords'];
                $_SESSION['exists'] = true;

                header('Location: ../view/privateview/login.php');
            }else{
                header('Location: ../view/privateview/login.php?resp=2');
            }
            // if(password_verify($sPassP, $_SESSION['userPass'])){
            //     header('Location: ../view/privateview/login.php');
            // }else{
            //     header('Location: ../view/privateview/login.php?resp=2');
            // }
            // header('Location: ../view/privateview/login.php');
        }else{
            header('Location: ../view/privateview/login.php?resp=1');
            // echo $sPassCrip;//$sPassP.' -- ' . $data['passwords'];
        }
    }

?>