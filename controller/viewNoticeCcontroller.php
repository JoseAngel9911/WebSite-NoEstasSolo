<?php 

require('controller/viewNoticeController.php');

$objC = new view;
$fetch2 = $objC->llist($objConection, 'Aviso');

$num2 = $fetch2->fetch_assoc();
$id2 = (int) $num2['id'];

$avisoA = new view;
$avisoB = new view;
$avisoC = new view;
$avisoD = new view;

$nmA = 0;
$nmB = 1;
$nmC = 2;
$nmD = 3;

$resultA1 = $avisoA->order($objConection, $id2, 'Aviso');
$resultB2 = $avisoB->order($objConection, $id2 - $nmB, 'Aviso');
$resultC3 = $avisoC->order($objConection, $id2 - $nmC, 'Aviso');
$resultD4 = $avisoD->order($objConection, $id2 - $nmD, 'Aviso');

$rowA = $resultA1->fetch_assoc();
$rowB = $resultB2->fetch_assoc();
$rowC = $resultC3->fetch_assoc();
$rowD = $resultD4->fetch_assoc();


while (true) {

    if (!$rowA) {

        $nmA = $nmA + 1;
        $nmB = $nmB + 1;
        $nmC = $nmC + 1;
        $nmD = $nmD + 1;

        $resultA1 = $avisoA->order($objConection, $id2, 'Aviso');
        $resultB2 = $avisoB->order($objConection, $id2 - $nmB, 'Aviso');
        $resultC3 = $avisoC->order($objConection, $id2 - $nmC, 'Aviso');
        $resultD4 = $avisoD->order($objConection, $id2 - $nmD, 'Aviso');

        $rowA = $resultA1->fetch_assoc();
        $rowB = $resultB2->fetch_assoc();
        $rowC = $resultC3->fetch_assoc();
        $rowD = $resultD4->fetch_assoc();
    }
    if (!$rowB) {

        $nmB = $nmB + 1;
        $nmC = $nmC + 1;
        $nmD = $nmD + 1;

        $resultB2 = $avisoB->order($objConection, $id2 - $nmB, 'Aviso');
        $resultC3 = $avisoC->order($objConection, $id2 - $nmC, 'Aviso');
        $resultD4 = $avisoD->order($objConection, $id2 - $nmD, 'Aviso');

        $rowB = $resultB2->fetch_assoc();
        $rowC = $resultC3->fetch_assoc();
        $rowD = $resultD4->fetch_assoc();
    }
    if (!$rowC) {

        $nmC = $nmC + 1;
        $nmD = $nmD + 1;

        $resultC3 = $avisoC->order($objConection, $id2 - $nmC, 'Aviso');
        $resultD4 = $avisoD->order($objConection, $id2 - $nmD, 'Aviso');

        $rowC = $resultC3->fetch_assoc();
        $rowD = $resultD4->fetch_assoc();
    }
    if (!$rowD) {

        $nmD = $nmD + 1;
        $resultD4 = $avisoD->order($objConection, $id2 - $nmD, 'Aviso');
        $rowD = $resultD4->fetch_assoc();
    }
    if ($rowA && $rowB && $rowC && $rowD) {

        break;

    }

}
