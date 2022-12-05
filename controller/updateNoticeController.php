<?php 
require('../model/connection.php');
require('../model/editModel.php');

$objC = new Connection;  
$objConection = $objC->setConnect();

$objEdit = new edit;

$title = $_POST['title'] ?? false;
$content = $_POST['content'] ?? false;
$type = $_POST['type'] ?? false;
$id = $_POST['id'] ?? false;
$fechaActualizada = date('d/m/y');


$objEdit->update($objConection, $id, $title, $content, $type, $fechaActualizada);


header("Location:  ../view/privateview/view_edit.php?msm=true&id_ac=$id");

























