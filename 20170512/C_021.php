<?php

$input_par = trim(fgets(STDIN));
$par = [];
$par = explode(" ", $input_par);

$n = trim(fgets(STDIN));

for($i = 0; $i < $n; $i++) {
    $var_input = trim(fgets(STDIN));
    $var = explode(" ", $var_input);

    for($j = 0; $j < 2; $j++) {
        $var2[$i][$j] = $var[$j];
    }
}

for($i = 0; $i < $n; $i++) {
    if(pow($par[2], 2) <= pow($var2[$i][0], 2) + pow($var2[$i][1], 2) and pow($var2[$i][0], 2) + pow($var2[$i][1], 2) <= pow($par[3], 2)) {
        echo "yes" . "\n";
    }
    echo "no" . "\n";
}

 ?>
