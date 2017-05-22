<?php

// $count = fgets( $fp, 10 ); // 9桁分値読み取り
// $count++; // 値+1（カウントアップ）
// rewind( $fp ); // ファイルポインタを先頭に戻す
// fputs( $fp, ","." $date" ); // 値書き込み

// $prev = fgets( $fp, 25 );
// echo $prev."<br />";
// $prev =$date;
// fwrite($fp,"0,$prev");

$handle = fopen('file.csv','r'); // ファイルを開いてファイルポインタを取得
$contents = fread( $handle, 1024 ); // ファイル内容を1024バイト分読み込んで変数に格納
fclose( $handle ); // ファイルを閉じてファイルポインタを破棄
echo "前回：". $contents."<br />"; // 変数に格納しておいたファイル内容を出力


$fp = fopen('file.csv', 'r+w');

$handle = fopen('file.csv','r'); // ファイルを開いてファイルポインタを取得
$contents = fread( $handle, 1024 ); // ファイル内容を1024バイト分読み込んで変数に格納

$weekday = array( "日", "月", "火", "水", "木", "金", "土" );
$new = date("Y m/d")."(".$weekday[date("w")].")".date(" G:i:s");

$contents = $new;

rewind( $fp ); // ファイルポインタを先頭に戻す
fputs( $fp, $contents ); // 値書き込み

fclose( $fp );

echo "最新：". $new;
// @fwrite($fp, "$date");
?>
