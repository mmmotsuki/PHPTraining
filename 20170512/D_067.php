<?php

$switch = "OFF" ;
$input = fgets(STDIN);

$mod = $input % 2 ;     //2で割ったあまり

if($mod == 0) {
    echo "$switch" . "/n";
}
else {
    $switch = "ON";
    echo "$switch" . "\n";
}

 ?>
