<?php
$EMAIL = '1handika@gmail.com';
$PASSWORD = 'handi2^##';
   if (!preg_match("/^[0-9]/",$EMAIL)) {
      echo 'Email Harus Diawali Oleh Angka'; 
    }
    else  if(!preg_match("/@./",$EMAIL)) {
      echo 'Format Email Salah'; 
    }
    else {
      echo 'Email Benar'; 
    }

    if (strlen($PASSWORD)>(9)) {
      echo "Password Hanya Boleh 9 Karakter";
    }
    else  if(preg_match("/[a-z]{6}/",$PASSWORD))  {
      echo "Password Hanya Boleh 5 Karakter Huruf";
    }
    else  if(preg_match("/[1-9]{3}/",$PASSWORD))  {
      echo "Password Hanya Boleh 2 Karakter Angka";
    }
    else  if(preg_match("/[1-9]{3}/",$PASSWORD))  {
      echo "Password Hanya Boleh 2 Karakter Angka";
    }else  if(preg_match("/[@#%^&*]{3}/",$PASSWORD))  {
      echo "Password Hanya Boleh 2 Karakter Simbol";
    }
    else{echo "Password Benar";
    
    }
?>