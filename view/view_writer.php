<?php
    session_start();
    
        // !Definir que un tipo de usuario me mueve a una pestaña especifica
        // !Administrador, quizas una tabla con registros de las publicaciones y de usuarios
        // !Escritor o Editor, lo lleve a la pestaña para subir info (view_writer)

    // $nameUser = isset($_SESSION['userName']) ? $_SESSION['userName'] : 'NOMBRE_USER';


    require '../controller/writer_controller.php';    
    
    // echo $sTitle . '<br>' . $iTag . '<br>' . $sContent. '<br>' .$_SESSION['userID'] . '<br>' . $sDate;
    echo $_SESSION['userID']. '<br>' .$_SESSION['userName'] . '<br>' . $_SESSION['userAccount'] . '<br>' . $_SESSION['userType']. '<br>' .$_SESSION['userPhone'] . '<br>' . $_SESSION['userPass'];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritor</title>
</head>
<body>
    <h1>No estas solo</h1>
    <article>
        <section>
            <div><?php if(isset($_POST['subir'])){echo messageInsert($response);}?></div>
            <h2>Editor de Texto</h2>
            <form method="post" action="view_writer.php">
                <div>
                    <label>Titulo del articulo:</label>
                    <input type="text" name="title_article">
                </div>
                <div> 
                    <label>Autor: </label> <label><?php echo $_SESSION['userName']?></label>
                    <label>Tipo de Articulo</label> 
                    <select name="type_content">
                        <optgroup label="Tipo de Contenido">
                            <option value="1">Noticia</option>
                            <option value="2">Aviso</option>
                        </optgroup>
                    </select>
                </div>
                <div>
                    <label>Contenido:</label>
                    <textarea name="content" cols="100" rows="40"></textarea>
                </div>
                <div>
                    <input type="submit" name='subir' value="Subir">
                </div>
                </div>
                <div>
                    <a href="../controller/close_session.php">Salir</a>
                </div>
            </form>
        </section>
    </article>
</body>
</html>