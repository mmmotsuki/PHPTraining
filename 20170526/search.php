<?php

session_start();

$file = fopen("itiran.csv", "r");
$fp = fopen("search.csv", "r+"); // ファイル開く
rewind( $fp );

$list = [];
/* ファイルを1行ずつ出力 */
$k = 0;

if($file){
    while ($line = fgets($file)) {
        if($_GET['search1'] == substr($line, 0, 4)) {
            fputs($fp, $line);
            $k = 1;
            break;
        }
    }
}
if($k == 0) {
    ftruncate($fp, 0);
}
fclose ($file);
fclose ($fp);
?>

<html>
<head>
<title>検索結果</title>
</head>
<body>
<div class="main">
<link rel="stylesheet" href="styles2.css">
<form action="itiran.php" method="get">
<h1>検索結果</h1>
<p class="sub">検索パラメータ：<span><?php echo $_GET['search1']; ?></p>

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
    $file = "search.csv";
    if(($handle = fopen ($file, "r")) !== FALSE) {
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            echo "\t<tr>\n";
            for($i = 0; $i < count($data); $i++) {
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "<tbody>" . "</table>\n";
        fclose ($handle);
    }
    ?>

<center>
    <div class="button">
        <input type="submit" name="modoru" value="一覧画面へ戻る">
    </div>
</center>

<br><br>
</div>
</body>
</html>
