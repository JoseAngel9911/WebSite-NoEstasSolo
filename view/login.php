<?php

    $response = isset($_GET['resp']) ? $_GET['resp'] : '';
    session_start();
    $exists = isset($_SESSION['exists']) ? $_SESSION['exists'] : false;
    $userType = isset($_SESSION['userType']) ? $_SESSION['userType'] : '';


    function message($responseP, $existsP, $userTypeP){
        if($existsP == false){
            if($responseP == 1){
                return 'No existe usuario en el sistema';
            }
        }else{
            redirection($userTypeP);
            // header('Location: view_administator.php');
            // echo $userTypeP;
        }
    }

    function redirection($userTypeP){
        if($userTypeP == 'Administrador'){
            header('Location: view_administator.php?e=1');
        }
        if($userTypeP == 'Escritor'){
            header('Location: view_writer.php');
        }
        
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
</head>
<body>
    <header>
        <h1>No estas solo</h1>
    </header>
    <div><?php echo message($response, $exists, $userType)?></div>
    <article>
        <section>
            <div><?php if(isset($_SESSION['userName'])){ echo $_SESSION['userName'];}?></div>
            <h3>Inicio de Sesion</h3>
            <form method="post" action="../controller/login_controller.php">
                <!-- "> -->
                <div>
                    <label>Ingrese usuario:</label>
                    <input type="text" name="user">
                </div>
                <div>
                    <label>Contraseña:</label>
                    <input type="password" name="pass">
                </div>
                <div>
                    <input type="submit" value="Entrar">
                    <input type="reset" value="Limpiar" name="limpiar">
                </div>
    
            </form>
        </section>        
    </article>
</body>
</html>