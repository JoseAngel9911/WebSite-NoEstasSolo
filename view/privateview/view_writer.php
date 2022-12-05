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
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 



</head>
<body>
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
        
        
        <script >
            
            CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                
                
                toolbar: {
                    items: [
                        'exportPDF','exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                         '|',
                        
                    ],
                    shouldNotGroupWhenFull: true
                },
                
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                
               
                
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                
                fontSize: {
                    options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                    supportAllValues: true
                },
                
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                
                htmlEmbed: {
                    showPreviews: true
                },
                
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
                
                removePlugins: [
                    
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    
                    'MathType'
                ]
            });
        </script>

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
    
</body>
</html>