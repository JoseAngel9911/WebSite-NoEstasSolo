<?php
require('../../model/connection.php');
require('../../model/editModel.php');


  $id = $_GET['id'] ?? false;
  $obj = new Connection;
  $objConection = $obj->setConnect();

  $objEdit = new edit;
  $result=$objEdit->inner($objConection, $id);



  
