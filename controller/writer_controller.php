<?php

    require 'editor.php';

    $sTitle = isset($_POST['title_article']) ? $_POST['title_article'] : 'Ningun titulo';
    $iTag = isset($_POST['type_content']) ? intval($_POST['type_content']) : 0;
    $sContent = isset($_POST['content']) ? $_POST['content'] : 'Ningun contenido';

    $iAutor = isset($_SESSION['userID']) ? $_SESSION['userID'] : 0;
    
    $sDate = date('Y/m/d');

 
    if(isset($_POST['subir'])){
        $objEditor = new Editor;
        $response = $objEditor->addNotice($sTitle,$sContent,$sDate,$iAutor,$iTag);
    }

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