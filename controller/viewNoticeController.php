<?php 
require('model/viewNoticeModel.php');
require('model/connection.php');

$obj = new Connection;
$objConection = $obj->setConnect();

$objL = new view;


$fetch=$objL->llist($objConection);

$objA = new view;
$objB = new view;
$objC = new view;
$objD = new view;
$objE = new view;



$result1=$objA->order($objConection, $fetch->num_rows);
$result2=$objB->order($objConection, $fetch->num_rows-1);
$result3=$objC->order($objConection, $fetch->num_rows-2);
$result4=$objD->order($objConection, $fetch->num_rows-3);
$result5=$objE->order($objConection, $fetch->num_rows-4);



$row1=$result1->fetch_assoc(); 
$row2=$result2->fetch_assoc(); 
$row3=$result3->fetch_assoc(); 
$row4=$result4->fetch_assoc(); 
$row5=$result5->fetch_assoc(); 
 
   
  


    
   

