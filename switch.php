<?php

//$bulan=date("M");
$bulan="Jul";

switch ($bulan){

    case"Jan":
       echo "Ini bulan Januari";
    break;

    case"Feb":
        echo "Ini bulan Februari";
     break;

     case"Mar":
        echo "Ini bulan Maret";
     break;

     case"Apr":
        echo "Ini bulan April";
     break;

     case"Mei":
        echo "Ini bulan Mei";
     break;

     default:
        echo "Bulan antara Juni dan Desember";
     break;

}

?>