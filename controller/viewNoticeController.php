<?php 

require('model/connection.php');
require('model/viewNoticeModel.php');

$obj = new Connection;
$objConection = $obj->setConnect();

$objA = new view;
$objB = new view;
$objC = new view;
$objD = new view;
$objE = new view;

$result1=$objA->order($objConection, 16);
$result2=$objB->order($objConection, 4);
$result3=$objC->order($objConection, 21);
$result4=$objD->order($objConection, 20);
$result5=$objE->order($objConection, 19);



$row1=$result1->fetch_assoc(); 
$row2=$result2->fetch_assoc(); 
$row3=$result3->fetch_assoc(); 
$row4=$result4->fetch_assoc(); 
$row5=$result5->fetch_assoc(); 
 
   
  


    
   

