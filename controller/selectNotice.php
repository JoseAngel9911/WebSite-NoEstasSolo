<?php 

require('../../model/editModel.php');

$ida = $_GET['id'] ?? false;

    $objEdit = new edit;
    $result=$objEdit->list($ida);
    $row=$result->fetch_assoc();
      