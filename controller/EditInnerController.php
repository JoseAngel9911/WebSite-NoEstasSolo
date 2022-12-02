<?php
require('../model/connection.php');
require('../model/editModel.php');

$id =  $_POST['id'] ?? false;


$objC = new Connection;
$objConection = $objC->setConnect();

$objInn = new edit;
$result=$objInn->inner($objConection, $id);

if($id == false){

    echo "el id esta vacio";
    die();

}

$json = array();

while($row = $result->fetch_assoc()){

    $json[]=array(

        'titulo' => $row['title'],
        'tipo' => $row['type_article'],
        'content' => $row['article_content']
    );

}   

    
$jsonString = json_encode($json[0]);

echo $jsonString;