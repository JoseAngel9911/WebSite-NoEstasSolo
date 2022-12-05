<?php 
require('../../model/connection.php');
require('../../model/editModel.php');

$ida = $_GET['id'] ?? false;

    $objC = new Connection;  
    $objConection = $objC->setConnect();
    $objEdit = new edit;
    $result=$objEdit->list($objConection, $ida);
    $row=$result->fetch_assoc();
      