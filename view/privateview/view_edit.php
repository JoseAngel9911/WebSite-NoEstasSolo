<?php
require('../../controller/listEditController.php');
?>
<?php
session_start();
//$titulo= 'Titulo ';

// $nameUser = isset($_SESSION['userName']) ? $_SESSION['userName'] : 'NOMBRE_USER';


//require '../controller/writer_controller.php';    

// echo $sTitle . '<br>' . $iTag . '<br>' . $sContent. '<br>' .$_SESSION['userID'] . '<br>' . $sDate;
//echo $_SESSION['userID']. '<br>' .$_SESSION['userName'] . '<br>' . $_SESSION['userAccount'] . '<br>' . $_SESSION['userType']. '<br>' .$_SESSION['userPhone'] . '<br>' . $_SESSION['userPass'];

// echo $iAutor;

$exists = isset($_SESSION['exists']) ? $_SESSION['exists'] : false;

if ($exists == false) {
    header('Location: ../privateview/login.php');
}

$response = isset($_GET['e']) ? $_GET['e'] : '';

function messageInsert($responseP)
{
    if ($responseP == 1) {
        return 'Se registro la noticia correctamente';
    } else if ($responseP == 2) {
        return 'No se registro la noticia correctamente';
    } else if ($responseP == 3) {
        return 'No se pudo registrar la noticia';
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritor</title>


	


    <link href="../css/edit.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/loading.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">




</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="loader-page"></div>
    <nav class="nav">
        <ul class="menu">

            <h1>No estas solo</h1>
            <li><a class="active" href="view_writer.php">Escribir noticia</a></li>
            <li><a href="">Editar noticia</a></li>
            <li><a href="../../controller/close_session.php">Salir</a></li>

        </ul>
    </nav>

    <section>

        <h1>Editar Noticia</h1>


        <label>Autor: </label> <label><?php echo $_SESSION['userName'] ?></label>

        <table id="table1">
            <thead>
                <tr>
                    <td>autor</td>
                    <td>titulo</td>
                    <td>tipo de texto</td>
                    <td>fecha de publicacion</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <?php while ($row =  $result->fetch_assoc()) { ?>

                        <div id="sexo" style="background-color:black ;">

                            <td><?php $nameEditor = $row['name_user'] . ' ' . $row['lastname_user'];
                                echo $nameEditor;
                            ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo  $row['type_Article']; ?></td>
                            <td><?php echo  $row['date_register']; ?></td>
                           
                            <td > <?php echo "<a href='edit_view.php?id=$row[id_Article]&controll=true'>Editar</a>"; ?></td>
                            <style>
                                #link:hover {
                                    background-color: cadetblue;
                                }
                            </style>
                </tr>
            </tbody>

        <?php } ?>
        </table>

    </section>



    <script src="../js/loader.js"></script> 
<script src="../js/ckedit.js"></script>
<script src="../../DataTables/datatables.min.js"></script>
</body>

</html>

<?php

$msm = $_GET['msm'] ?? false;
$id = $_GET['id_ac'] ?? false;


if ($msm == true) {

    echo "la base de datos ha sido actualizada";
    echo " <p id_ac=$id id='parrafo'></p>";

?>

<?php } ?>