<?php
    require 'users.php';

    $finalAccount = '@nesolo.cl';
    $year = date('Y');
    $finalPass = 'nes' . $year;

    if(isset($_POST['create']) && $_POST['create'] == 'Crear'){
        
        $sName = isset($_POST['name']) ? $_POST['name'] : '';
        $sLastName = isset($_POST['lastname']) ? $_POST['lastname'] : '';
        $sPhone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $sAccount = isset($_POST['account']) ? ($_POST['account']) : '';
        $sPassword = isset($_POST['password']) ? ($_POST['password']) : '';
        $iTypeUser = isset($_POST['type_user']) ? intval($_POST['type_user']) : 0;
        
        //$nameSep = str_split($sName);
        //$lastNameSep = str_split($sLastName);
        //$lastNamePaternal = explode(" ", $sLastName);

        //$startAccount = strtolower($nameSep[0] . $lastNamePaternal[0]);
        //$accountComplete = $startAccount . $finalAccount;

        //$startPass = strtolower($nameSep[0] . '.' . $lastNameSep[0] . $lastNameSep[1] . $lastNameSep[2]);
        //$passComplete = $startPass .'.'. $finalPass;

        // echo $accountComplete . '<br>';
        // echo $passComplete;

        $sPassCrip = password_hash($sPassword, PASSWORD_DEFAULT, [15]);

        $sAccountComplete = $sAccount . $finalAccount;

        $objUser = new Users;
        $response = $objUser->registerUser($sName,$sLastName,$sAccountComplete,$iTypeUser,$sPhone,$sPassCrip);

        // echo $sPassCrip;

        if($response == 1){
            header('Location: ../view/privateview/create_user.php?e=1');
        }else if($response == 2){
            header('Location: ../view/privateview/create_user.php?e=2');
        }else if($response == 3){
            header('Location: ../view/privateview/create_user.php?e=3');
        }

    }



?>