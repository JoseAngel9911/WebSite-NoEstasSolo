<?php
    session_start();

    $exists = isset($_SESSION['exists']) ? $_SESSION['exists'] : false;

    if($exists == false){
		header('Location: ../privateview/login.php');
	}
    //$titulo= 'Titulo ';

    // $nameUser = isset($_SESSION['userName']) ? $_SESSION['userName'] : 'NOMBRE_USER';


    //require '../controller/writer_controller.php';    
    
    // echo $sTitle . '<br>' . $iTag . '<br>' . $sContent. '<br>' .$_SESSION['userID'] . '<br>' . $sDate;
    //echo $_SESSION['userID']. '<br>' .$_SESSION['userName'] . '<br>' . $_SESSION['userAccount'] . '<br>' . $_SESSION['userType']. '<br>' .$_SESSION['userPhone'] . '<br>' . $_SESSION['userPass'];
    
    // echo $iAutor;
    $response = isset($_GET['e']) ? $_GET['e'] : '';

    function messageInsert($responseP){
        if($responseP == 1){
            return 'Se registro la noticia correctamente';
        }else if($responseP == 2){
            return 'No se registro la noticia correctamente';
        }else if($responseP == 3){
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

    <script src="../../implements/ckeditor5/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/edit.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <nav class="nav">
        <ul class="menu">

            <h1>No estas solo</h1>
            <li><a class="view_writer.php" href="view_writer.php">Escribir noticia</a></li>
            <li><a href="#">Editar noticia</a></li>
            <li><a href="../../controller/close_session.php">Salir</a></li>

        </ul>
    </nav>


    <form id="formulario">

                       
        <input type="hidden" id="idUpdate">
        <input type="text" id="titulo" placeholder="titulo"><br>
        
        <select name="box-content" id="articulo">
        <option label="Tipo de Contenido">
            <option value="Noticia">Noticia</option>
            <option value="Aviso">Aviso</option>
        </option>

        </select>
          
       

        <br><label>Autor:</label> <label><?php echo $_SESSION['userName'] ?></label>
        <div class="lo">

            <textarea name="content" id="editor" class="edit"></textarea>
            <input type="submit" class="bt1" value="actualizar" id="bt1">

            <!--<div >
                        <ul class="menu">
                    <li><a href="../../controller/close_session.php">Salir</a></li>
                        </ul> -->
        </div>
    </form>

    <table id="tabla">
        <thead>
            <tr id="filas">
               
                <td>Titulo</td>
                <td>tipo de articulo</td>
                <td>fecha de registro</td>
            </tr>
        </thead>

        <tbody id="contenido-tabla">
        </tbody>
    </table>


    <!-- <script type="text/javascript">
                            ClassicEditor
                            .create( document.querySelector('#editor'))
                            .catch( error => {
                            console.error( error );
                            });
                     </script> -->



    <script src="../js/edit.js"></script>

</body>

</html>