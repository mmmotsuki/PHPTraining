<?php
$fp = fopen( "count.txt", "r+w" ); // ファイル開く
$count = fgets( $fp, 10 ); // 9桁分値読み取り
$count++; // 値+1（カウントアップ）
rewind( $fp ); // ファイルポインタを先頭に戻す
fputs( $fp, $count ); // 値書き込み
fclose( $fp ); // ファイル閉じる
 echo 'あなたは'.$count.'人目のお客様です'.'<br />';

 $weekday = array( "日", "月", "火", "水", "木", "金", "土" );

 print date("Y m/d")."(".$weekday[date("w")].")".date(" G:i");

?>
