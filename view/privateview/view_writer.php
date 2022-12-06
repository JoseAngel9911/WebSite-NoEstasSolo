<?php
    session_start();
    //$titulo= 'Titulo ';

    // $nameUser = isset($_SESSION['userName']) ? $_SESSION['userName'] : 'NOMBRE_USER';


    //require '../controller/writer_controller.php';    
    
    // echo $sTitle . '<br>' . $iTag . '<br>' . $sContent. '<br>' .$_SESSION['userID'] . '<br>' . $sDate;
    //echo $_SESSION['userID']. '<br>' .$_SESSION['userName'] . '<br>' . $_SESSION['userAccount'] . '<br>' . $_SESSION['userType']. '<br>' .$_SESSION['userPhone'] . '<br>' . $_SESSION['userPass'];
    
    // echo $iAutor;

    $exists = isset($_SESSION['exists']) ? $_SESSION['exists'] : false;

    if($exists == false){
		header('Location: ../privateview/login.php');
	}

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
    <link rel="stylesheet" href="../css/styleWriter.css" />
    <link rel="stylesheet" href="../css/loading.css" />
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 



</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="loader-page"></div>
    <nav class="nav">
        <ul class="menu">
        
          <h1 >No estas solo</h1>
          <li><a class="active" href="view_writer.php">Escribir noticia</a></li>
          <li><a href="view_edit.php">Editar noticia</a></li>
          <li><a href="../../controller/close_session.php">Salir</a></li>

        </ul>
    </nav>
    <div>
        <article>
            <section>
                <div><?php if(isset($_POST['subir'])){echo messageInsert($response);}?></div>
                
                <form method="post" action="../../controller/writer_controller.php" enctype="multipart/form-data">
                    <div >
                        <br><label> Titulo del articulo </label>
                        <input type="text" name="title_article"><br>
                    </div>
                    <div>
                        <br><label>Autor: </label> <label><?php echo $_SESSION['userName']?></label>
                        <label>Tipo de Articulo</label> 
                        <select name="type_content">
                            <optgroup label="Tipo de Contenido">
                                <option value="1">Noticia</option>
                                <option value="2">Aviso</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        
                        <textarea name="content" id="editor"  ></textarea>
        
                        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>

                    <div id="bt1" >
                        <input type="file" id="article_pic" name="article_imagen" accept=".png , .jpg">
                    </div>
                    <div>
                        <input type="submit" name='subir' value="Guardar" >
                    </div>
                    <!-- <div>
                        <a href="../../controller/close_session.php">Salir</a>
                    </div> -->
                </form>
            </section>
        </article>
    </div>
    
    </div>
                    <div id="editor1" style="display:none"></div> 
<div class="ck-reset ck-editor..." ...>
    <div ...>
        <!-- This is the editable element -->
        <div class="ck-blurred ck-editor__editable ck-rounded-corners ck-editor__editable_inline">
            
        </div>
    </div>
</div>
<style>
.ck-editor__editable_inline {
    margin: auto;
    height: 400px;
    width: 1000px;
}
</style>
<script src="../js/ckedit.js"></script>
<script src="../js/loader.js"></script>

</body>
</html>