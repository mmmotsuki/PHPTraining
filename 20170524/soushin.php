<?php

session_start();
//
$name = $_SESSION['sei'] . " " . $_SESSION['mei'];
$tell = $_SESSION['tell1'] . "-" . $_SESSION['tell2'] . "-" . $_SESSION['tell3'];
$mail = $_SESSION['mail1'] . "@" . $_SESSION['mail2'];

$co = fopen( "count.txt", "r+" ); // ファイル開く
$count = trim(fgets( $co, 10 )); // 9桁分値読み取り
$str = fgets($co);2

$_SESSION['count'] = $count;


$list = [str_pad($count, 4, 0, STR_PAD_LEFT), $name, $_SESSION['seibetu'], $_SESSION['address'], $tell, $mail, $_SESSION['where'], $_SESSION['category'], $_SESSION['situmon']];
$fp = fopen( "itiran.csv", "a+" ); // ファイル開く
$str = fgets($fp);
fputcsv($fp, $list);

$count++; // 値+1（カウントアップ）


rewind( $co ); // ファイルポインタを先頭に戻す
rewind( $fp ); // ファイルポインタを先頭に戻す
fputs( $co, $count ); // 値書き込み
fclose( $co ); // ファイル閉じる
fclose($fp);

header( 'Location:thankyou.php' );

?>
