<?php
$Contoh="malaam";
$array1 = array( 'a','b', 'c', 'd', 'e', 'f' , 'g', 'h' , 'i', 'j' , 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$array2 = array( 'A','B', 'C', 'D', 'E', 'F' , 'G', 'H' , 'I', 'J' , 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
$kata = preg_replace("/[^a-zA-Z]/", "", $Contoh);
$kata1 = str_split($Contoh);
$TampungArray2 = array_diff($kata1,$array1);
$TampungArray1 = array_diff($kata1,$array2);
if($kata != strrev($kata)){  echo 'Bukan Palindrom'; }
else if(count($TampungArray1)>0 and count($TampungArray2)==1){  echo 'Palindrom Kapital'; }
  else if(count($TampungArray1)==1 and count($TampungArray2)>0){  echo 'Palindrom Kecil'; }
   else if(count($TampungArray1)>1 and count($TampungArray2)>1){  echo 'Palindrom Mix'; }
    else if(count($TampungArray1)>0 and count($TampungArray2)==0){  echo 'Palindrom Murni'; }
    ?>