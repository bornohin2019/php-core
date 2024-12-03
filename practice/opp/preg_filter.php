<?php
$foods=array("pasta","steak","fish","potatoes","political");
$filtered_arry=preg_grep("/^p/",$foods);
print_r($filtered_arry);


?>