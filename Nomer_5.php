<?php 
$kata = "handika yulma kristiawan";
$huruf = "a";
$result = substr_count($kata, $huruf);
if ($result>0){
echo "Maka jumlah huruf ",$huruf," pada variable adalah ",$result;}
else {echo"not found";}
?>