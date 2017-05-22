<?php
$fp1 = fopen( "count.csv", "r+w" ); // ファイル開く

$fp2 = fopen('count1.csv', 'r+w');

// $count = fgets( $fp, 10 ); // 9桁分値読み取り
$weekday = array( "日", "月", "火", "水", "木", "金", "土" );

$pieces[0] = fgets( $fp, 10 );

$pieces[1] = date("Y m/d   G:i");

$count++; // 値+1（カウントアップ）
rewind( $fp1 ); // ファイルポインタを先頭に戻す
rewind( $fp2 ); // ファイルポインタを先頭に戻す
// fputs( $fp1, $count ); // 値書き込み

foreach($datas as $data){
　　// $dataに配列一つが入る
}


$pieces = explode(",", $date);


fclose( $fp ); // ファイル閉じる
 echo 'あなたは'.$count.'人目のお客様です'.'<br />';

 $weekday = array( "日", "月", "火", "水", "木", "金", "土" );

 print date("Y m/d")."(".$weekday[date("w")].")".date(" G:i");

?>
