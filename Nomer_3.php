<?php
$hex = "#123FFF";
$pecah = str_split($hex);
$array2 = array( '#','1', '2', '3', '4', '5' , '6', '7' , '8', '9' , '0', 'A', 'B', 'C', 'D', 'E', 'F');
$TampungArray = array_diff($pecah,$array2);
if (strlen($hex)<(4) or strlen($hex)>(7)) {
    echo "Format Hex Code Salah";
  }
  else if ($pecah[0]!="#"){echo 'Awal Harus #'; }
  else if(count($TampungArray)==0){  echo 'Format Hex Code Benar'; }
  else {echo"Format Hex Code Salah";
}
 

?>