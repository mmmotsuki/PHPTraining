<table border="1">
<?php
for($i = 1; $i <=10; $i++){
    echo '<tr>';
    for($j = 1; $j <= 10; $j++){
        $ans = $i * $j;
        echo '<td>'.$ans.'</td>';
    }
    echo '</tr>';
}
?>
</table>
