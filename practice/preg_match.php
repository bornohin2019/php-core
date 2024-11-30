<?php
$input=[
'My class Start at 9 o Clock',
'we are student of IDB',
'our batch 62'

];
$r = preg_filter('/[0-9]+/','($0)',$input);
print_r ($r);

?>