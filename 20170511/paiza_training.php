<?php

//$num = fgets(STDIN);
//
// for($i=0; $i<count($num); $i++) {
//
//     $num[$i] = fgets(STDIN);
// }

$num[0] = 1000;
$num[1] = 1992;
$num[2] = 2000;
$num[3] = 2001;

for($i=0; $i<count($num); $i++) {

echo $num[$i] % 100 .", " . $num[$i] % 400 . ", ";
    if($num[$i]%4 == 0) {

        if($num[$i]%100 == 0 and $num%400 == 0) {

            echo "$num[$i] is a leap year <br />";
        }
        else {
            echo "$num[$i] is not1 a leap year <br />";
        }
    }
    else {
        echo "$num[$i] is not2 a leap year <br />";
    }
}


 ?>
