<html>
<head>
<title>  </title>
</head>
<body>
<div class="main">
<link rel="stylesheet" href="styles2.css">
<h1>お問い合わせ一覧</h1>
<center>

<table>

    <tr>
    <th width=40px>No.</th>
    <th width=100px>氏名</th>
    <th width=40px>性別</th>
    <th width=200px>住所</th>
    <th width=140px>電話番号</th>
    <th width=150px>メールアドレス</th>
    <th width=90px>どこで知ったか</th>
    <th width=70px>質問カテゴリ</th>
    <label for="td3"></label>
    <th id="td3">質問内容</th>
    </tr>

<?php
$file = "itiran.csv";
if ( ( $handle = fopen ( $file, "r" ) ) !== FALSE ) {
    while ( ( $data = fgetcsv ( $handle, 1000, ",") ) !== FALSE ) {
        echo "\t<tr>\n";
        for ( $i = 0; $i < count( $data ); $i++ ) {
            echo "\t\t<td>{$data[$i]}</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    fclose ( $handle );
}
?>
</center>
<br><br>
</div>
</body>
</html>
