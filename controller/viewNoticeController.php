<?php

require('model/viewNoticeModel.php');
require('model/connection.php');

$obj = new Connection;
$objConection = $obj->setConnect();

$objL = new view;
$fetch = $objL->llist($objConection, 'Noticia');

$num = $fetch->fetch_assoc();
$id = (int) $num['id'];



$objA = new view;
$objB = new view;
$objC = new view;
$objD = new view;
$objE = new view;

$num1 = 0;
$num2 = 1;
$num3 = 2;
$num4 = 3;
$num5 = 4;

$result1 = $objA->order($objConection, $id, 'Noticia');
$result2 = $objB->order($objConection, $id - $num2, 'Noticia');
$result3 = $objC->order($objConection, $id - $num3, 'Noticia');
$result4 = $objD->order($objConection, $id - $num4, 'Noticia');
$result5 = $objE->order($objConection, $id - $num5, 'Noticia');

$row1 = $result1->fetch_assoc();
$row2 = $result2->fetch_assoc();
$row3 = $result3->fetch_assoc();
$row4 = $result4->fetch_assoc();
$row5 = $result5->fetch_assoc();

$n1=0;
while ($n1<=$id) {

    if (!$row1) {

        $num1 = $num1 + 1;
        $num2 = $num2 + 1;
        $num3 = $num3 + 1;
        $num4 = $num4 + 1;
        $num5 = $num5 + 1;

        $result1 = $objA->order($objConection, $id - $num1, 'Noticia');
        $result2 = $objB->order($objConection, $id - $num2, 'Noticia');
        $result3 = $objC->order($objConection, $id - $num3, 'Noticia');
        $result4 = $objD->order($objConection, $id - $num4, 'Noticia');
        $result5 = $objE->order($objConection, $id - $num5, 'Noticia');

        $row1 = $result1->fetch_assoc();
        $row2 = $result2->fetch_assoc();
        $row3 = $result3->fetch_assoc();
        $row4 = $result4->fetch_assoc();
        $row5 = $result5->fetch_assoc();
    }

    if (!$row2) {

        $num2 = $num2 + 1;
        $num3 = $num3 + 1;
        $num4 = $num4 + 1;
        $num5 = $num5 + 1;

        $result1 = $objA->order($objConection, $id, 'Noticia');
        $result2 = $objB->order($objConection, $id - $num2, 'Noticia');
        $result3 = $objC->order($objConection, $id - $num3, 'Noticia');
        $result4 = $objD->order($objConection, $id - $num4, 'Noticia');
        $result5 = $objE->order($objConection, $id - $num5, 'Noticia');

        $row1 = $result1->fetch_assoc();
        $row2 = $result2->fetch_assoc();
        $row3 = $result3->fetch_assoc();
        $row4 = $result4->fetch_assoc();
        $row5 = $result5->fetch_assoc();
    }
    if (!$row3) {

        $num3 = $num3 + 1;
        $num4 = $num4 + 1;
        $num5 = $num5 + 1;

        $result3 = $objC->order($objConection, $id - $num3, 'Noticia');
        $result4 = $objD->order($objConection, $id - $num4, 'Noticia');
        $result5 = $objE->order($objConection, $id - $num5, 'Noticia');

        $row3 = $result3->fetch_assoc();
        $row4 = $result4->fetch_assoc();
        $row5 = $result5->fetch_assoc();
    }
    if (!$row4) {

        $num4 = $num4 + 1;
        $num5 = $num5 + 1;

        $result4 = $objD->order($objConection, $id - $num4, 'Noticia');
        $result5 = $objE->order($objConection, $id - $num5, 'Noticia');

        $row4 = $result4->fetch_assoc();
        $row5 = $result5->fetch_assoc();
    }
    if (!$row5) {

        $num5 = $num5 + 1;

        $result5 = $objE->order($objConection, $id - $num5, 'Noticia');

        $row5 = $result5->fetch_assoc();
    }

    if ($row1 && $row2 && $row3 && $row4 && $row5) {

        break;

    }

    $n1+=1;
}

