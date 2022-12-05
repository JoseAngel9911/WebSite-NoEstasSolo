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

    <link rel="stylesheet" href="../css/styleWriter.css" />
    <title>Document</title>

</head>

<body>

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


    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {


            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
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
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
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
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },

            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
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
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
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
    <script src="../js/ckedit.js"></script>
</body>

</html>