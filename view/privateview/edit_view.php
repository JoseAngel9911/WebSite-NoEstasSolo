<?php
require('../../controller/viewTableEditController.php');

$control = $_GET['controll'] ?? false;
$id = $_GET['id'] ?? false;

if ($control == false && $id == false) {
    header('Location: view_edit.php');
}

$row = $result->fetch_assoc();
$title = $row['title'];
$content = $row['article_content'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/loading.css">

    <link rel="stylesheet" href="../css/styleWriter.css" />
    <title>Document</title>

</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="loader-page"></div>
    <nav class="nav">
        <ul class="menu">
            <h1>No estas solo</h1>
            <li><button><a href="view_edit.php" style="text-decoration:dashed; color:black;">Volver a la lista</a></button></li>
        </ul>
    </nav>

    <section>

        <h1>Empezar a editar</h1>

        <form action="../../controller/updateNoticeController.php" method="post">


            <textarea name="title" required style="resize: none ;" placeholder="agregar titulo"><?php echo $title; ?></textarea>
            <textarea name="content" id="editor" placeholder="agregar contenido" required> <?php echo $content; ?> </textarea>

            <select name="type">
                <option value="1">Noticia</option>
                <option value="2">Aviso</option>
            </select>
          

            <input name="id" <?php echo "value=$id"; ?> type="hidden">
            <input type="submit" value="ACTUALIZAR">


        </form>

    </section>

    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>


    

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
            <div class="ck-blurred ck-editor_editable ck-rounded-corners ck-editor_editable_inline" role="textbox" aria-label="Rich Text Editor, main" contenteditable="true">

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
    <script src="../js/loader.js"></script> 
<script src="../js/ckedit.js"></script>
</body>

</html>