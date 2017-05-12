<table border="1">
<?php

$i = 1; //初期値設定; i:行番号を与える

for($j = 1; $i <= 10; $j++){   //j:列番号を与える
    if($j == 1) {
        echo '<tr>';
        echo '<td>' . $i * $j . '</td>';
    }
    elseif($j != 10) {
        echo '<td>' . $i * $j . '</td>';
    }
     elseif($j == 10) {
         echo '<td>' . $i * $j . '</td>';
         echo '</tr>';
         $j = 0;                //列番号をリセット
         $i++;                  //次の行へ移る
     }
}
?>
</table>
