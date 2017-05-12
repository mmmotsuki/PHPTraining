<table border="1">
<?php

$k = 65;

for ( $i = 0; $i < 5; $i++ ) {
    echo '<tr>';
    for($j = 0; $j < 5; $j++) {
	    $cr[$i][$j] = chr($k);
        echo '<td>'.$cr[$i][$j].'</td>';
        $k++;
    }
    echo '</tr>';
}

?>
</table>
