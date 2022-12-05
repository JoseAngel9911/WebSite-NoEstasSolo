<?php  
require('../../model/connection.php');
require('../../model/editModel.php');

$obj = new Connection;
$objConection = $obj->setConnect();
$objEdit = new edit;
$id=false;
$result=$objEdit->list($objConection, $id);

?>