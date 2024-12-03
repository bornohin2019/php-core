<?php
$d1 =data_create("28-03-2024");
$d2 =data_create("28-06-2024");
$diff = date.diff($d1,$d2);
echo $diff -> format("%R%a days");
echo "<br>";
date ("d-m-y");
echo date('l');
echo "<br>";
echo date ("h s i");
echo "<br>";
$t= time();
echo date("h i sa", $t+3600);
echo "<br>";
$g= time();
echo date('h i sa',$g);
?>