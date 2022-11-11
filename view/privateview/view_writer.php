<?php
    session_start();
    $titulo= 'Titulo ';
    
        // !Definir que un tipo de usuario me mueve a una pestaña especifica
        // !Administrador, quizas una tabla con registros de las publicaciones y de usuarios
        // !Escritor o Editor, lo lleve a la pestaña para subir info (view_writer)

    // $nameUser = isset($_SESSION['userName']) ? $_SESSION['userName'] : 'NOMBRE_USER';


    //require '../controller/writer_controller.php';    
    
    // echo $sTitle . '<br>' . $iTag . '<br>' . $sContent. '<br>' .$_SESSION['userID'] . '<br>' . $sDate;
    //echo $_SESSION['userID']. '<br>' .$_SESSION['userName'] . '<br>' . $_SESSION['userAccount'] . '<br>' . $_SESSION['userType']. '<br>' .$_SESSION['userPhone'] . '<br>' . $_SESSION['userPass'];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritor</title>
    <link rel="stylesheet" href="../css/styleWriter.css" />
    <link rel="stylesheet" href="../css/styleMenuW.css" />
    <script src="../../implements/ckeditor5/ckeditor.js" ></script>



</head>
<body>
<nav class="nav">
<div class="letra">

      <ul>
        <li class="menu-title">
           <h1 >No estas solo</h1>
        <li>

           
          <li><a class="active" href="view_writer.php">Escribir noticia</a></li>

          <li><a href="#">editar noticia</a></li>

        </li>
      </ul>
</div>
  </nav>
    <div id="login">
    
    <article>
        <section>
            <div><?php if(isset($_POST['subir'])){echo messageInsert($response);}?></div>
            
            <form method="post" action="view_writer.php">
                <div >
                <br><label ><?php echo $titulo?></label><label> del contenido </label>
                    <input type="text" name="title_article"><br>
                
                    <br><label>Autor: </label> <label><?php echo $_SESSION['userName']?></label>
                    <label>Tipo de Articulo</label> 
                    <select name="type_content">
                        <optgroup label="Tipo de Contenido">
                            <option value="1">Noticia</option>
                            <option value="2">Aviso</option>
                        </optgroup>
                    </select>
                </div>
                <div id="area">
                    
                    
                    <textarea name="content" id="editor" cols="30" rows="80" ></textarea>

                  
                    <script type="text/javascript">
                     ClassicEditor
                    .create( document.querySelector('#editor'))
                    .catch( error => {
                     console.error( error );
                      });
    
        </script>

</script>
    </form>
                </div>
                <div>
                    <input type="submit" name='subir' value="Subir">
                
                   <br> <a href="../../controller/close_session.php">Salir</a>
                </div>
</div>
     </form>
        
    </article>
    </section>
</body>
</html>