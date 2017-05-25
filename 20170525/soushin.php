<?php

session_start();

$co = fopen("count.txt", "r+"); // ファイル開く
$count = trim(fgets($co, 10)); // 9桁分値読み取り
$str = fgets($co);

$_SESSION['count'] = $count;

$list = [str_pad($count, 4, 0, STR_PAD_LEFT), $_SESSION['name'], $_SESSION['seibetu'], $_SESSION['address'], $_SESSION['tell'], $_SESSION['mail'], $_SESSION['where1'], $_SESSION['category'], $_SESSION['situmon']];
$fp = fopen("itiran.csv", "a+"); // ファイル開く
$str = fgets($fp);
fputcsv($fp, $list);

$count++; // 値+1（カウントアップ）

rewind($co); // ファイルポインタを先頭に戻す
rewind($fp); // ファイルポインタを先頭に戻す
fputs($co, $count); // 値書き込み
fclose($co); // ファイル閉じる
fclose($fp);

header('Location:thankyou.php');

?>
