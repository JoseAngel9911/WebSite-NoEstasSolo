<?php 
require('../model/connection.php');
require('../model/editModel.php');

$objC = new Connection;  
$objConection = $objC->setConnect();

$objEdit = new edit;

$id = $_POST['id'] ?? '';
$titulo = $_POST['titulo'] ?? '';
$editor = $_POST['editor'] ?? '';
$articulo = $_POST['articulo'] ?? '';

if($titulo == '' || $editor == '' || $articulo== '' || $id==''){

    echo "no debe haber ningun dato vacio";
    die();

}


if($articulo=='Aviso'){
    
    $typeArticulo=2;

}
if($articulo=='Noticia'){
    
    $typeArticulo=1;

}

$resultado=$objEdit->update($objConection, $id, $titulo, $editor, $typeArticulo);
echo  "se ha actualizado";
die();



 
echo "fallido"; 






















