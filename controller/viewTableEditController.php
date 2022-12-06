<?php

require('../../model/editModel.php');


  $id = $_GET['id'] ?? false;



  $objEdit = new edit;
  $result=$objEdit->inner($id);



  
