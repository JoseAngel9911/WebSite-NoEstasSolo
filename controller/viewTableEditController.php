<?php

require('../model/connection.php');
require ('../model/editModel.php');

$obj = new Connection;
$objConection = $obj->setConnect();

$objEdit = new edit;

$result=$objEdit->list($objConection);

$json = array();
while($row =  $result->fetch_assoc()){


    $json[]=array(

        'id'=>$row['id'],
        'title'=>$row['title'],
        'type'=> $row['type_article'],
        'date_register'=> $row['date_register']
        
    );

}

$jsonStr=json_encode($json);

echo $jsonStr;



