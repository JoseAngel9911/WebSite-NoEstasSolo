<?php
    session_start();

    $response = isset($_GET['resp']) ? $_GET['resp'] : '';
    $exists = isset($_SESSION['exists']) ? $_SESSION['exists'] : false;
    $userType = isset($_SESSION['userType']) ? $_SESSION['userType'] : '';


    function message($responseP, $existsP, $userTypeP){
        if($existsP == false){
            if($responseP == 1){
                return 'No existe usuario en el sistema';
            }
            if($responseP == 2){
                return 'Clave equivocada';
            }
        }else{
            redirection($userTypeP);
            // header('Location: view_administator.php');
            // echo $userTypeP;
        }
    }

    function redirection($userTypeP){
        if($userTypeP == 'Administrador'){
            header('Location: view_administrator.php?e=1');
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
    <link rel="stylesheet" href="../css/styleLogin.css" />
   
</head>
<body>
    <div id="contenedor">
        <div id="login">
            <header>
                 <a href="../../index.php"><img class="logo" src="../images/logo-1.png" alt="logo" width="220" height="100"></a>
            </header>
            <!-- <div><?php echo message($response, $exists, $userType)?></div> -->
            <article>
                <section>
                    <div><?php if(isset($_SESSION['userName'])){ echo $_SESSION['userName'];}?></div>
                    <h3>Inicio de Sesion</h3>
                    <div id="loginform">
                    <form method="post" action="../../controller/login_controller.php">
                        <div>
                            <input type="text" name="user" placeholder=" Ingresar usuario" class="inp1">
                        </div>
                        <div>
                    
                            <br><input type="password" name="pass" placeholder="Ingresar contrase??a" class="inp2" id="pass">

                            <p>Mostrar contrase??a</p>
                            <input type="checkbox" id="mm" style="position:absolute; width:17px; height:17px; left:20px; bottom:95px;">

                        </div>
                        <div>
                            <input type="submit" value="Entrar" class="bt1">
                            <input type="reset" value="Limpiar" name="limpiar" class="bt2">
                        </div>
                    </form>
                </section>        
            </article>
        </div>
    </div>

    <script src="../js/edit.js">



    </script>
</body>
</html>