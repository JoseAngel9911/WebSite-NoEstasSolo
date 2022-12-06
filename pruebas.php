<?php 
require('./model/connection.php');
require('./model/editModel.php');

$obj = new Connection;
$objC = $obj->setConnect();


$objL = new edit;

$fetch=$objL->list($objC, $id=null);


while($list = $fetch->fetch_assoc()){

    echo $list['title'];

}

