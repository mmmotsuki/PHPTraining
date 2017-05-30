<html>
<head>
<title>詳細一覧</title>
</head>
<body>
<div class="main">
<link rel="stylesheet" href="styles2.css">
<h1>お問い合わせ一覧</h1>

<form action="search1.php" method="get">
<div class="search">
    <input type="text" name="keywords" value="" pettern ="\d{1,4}" placeholder="キーワード">
    <input type="submit" name="ANDbutton" value="AND検索" onclick="form.action='search1.php'; return true">
    <input type="submit" name="ORbutton" value="OR検索" onclick="form.action='search1.php'; return true">
</div>

<table>
    <tbody>
    <tr>
    <!-- <th id="check"></th> -->
    <th id="no">No.</th>
    <th id="name">氏名</th>
    <th id="category">性別</th>
    <th id="address">住所</th>
    <th id="tell">電話番号</th>
    <th id="mail">メールアドレス</th>
    <th id="where">どこで知った</th>
    <th id="category">質問カテゴリ</th>
    <th id="situmon">質問内容</th>
    </tr>


<?php

// var_dump($_GET['check']);

$hoge = $_GET['check'];

for ($i = 0; $i < count($hoge); $i++) {
// while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $data = explode(",", str_replace('"', '', $hoge[$i]));
    echo "\t<tr>\n";
    for($j = 0; $j < count($data); $j++) {
        echo "\t\t<td>{$data[$j]}</td>\n";
    }
    echo "\t</tr>\n";
}
echo "<tbody>" . "</table>\n";

?>

<center>
    <div class="button">
        <input type="submit" name="checkbutton" value="一覧画面へ戻る" onclick="form.action='aaa.php'; return true">
    </div>
</center>

</div>
</body>
</html>
