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
        <tbody>
        <tr>
        <th id="no">No.</th>
        <th id="name">氏名</th>
        <th id="seibetu">性別</th>
        <th id="address">住所</th>
        <th id="tell">電話番号</th>
        <th id="mail">メールアドレス</th>
        <th id="where">どこで知った</th>
        <th id="category">質問カテゴリ</th>
        <th id="situmon">質問内容</th>
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
</tbody>
</body>
</html>
