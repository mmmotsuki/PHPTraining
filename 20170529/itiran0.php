<html>
<head>
<title>お問い合わせ一覧</title>
</head>
<body>
<div class="main">
<link rel="stylesheet" href="styles2.css">
<h1>お問い合わせ一覧</h1>

<form action="control0.php" method="get">
<div class="search">
    <input type="text" name="keywords" value="" pettern ="\d{1,4}" placeholder="キーワード">
    <input type="submit" name="ANDbutton" value="AND">
    <input type="submit" name="ORbutton" value="OR">
</div>

<table>
    <tbody>
    <tr>
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

session_start();

// if (isset($_GET['next']) == NULL && isset($_GET['back']) == NULL) {
//     $_SESSION['start'] = 0;
//     $_SESSION['last'] = 1;
// }
//
// if (isset($_GET['next'])) {
//     $_SESSION['start'] += 2;
//     $_SESSION['last'] += 2;
// }
// elseif (isset($_GET['back'])) {
//     $_SESSION['start'] -= 2;
//     $_SESSION['last'] -= 2;
// }


$file = "itiran.csv";
if(($handle = fopen ($file, "r")) !== FALSE) {
    $hoge = file("itiran.csv");


    for ($j = $_SESSION['start']; $j <= $_SESSION['last']; $j++) {
    // while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if ($j < count($hoge)) {
            $data = explode(",", str_replace('"', '', $hoge[$j]));
            echo "\t<tr>\n";
            for($i = 0; $i < count($data); $i++) {
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
        }
        echo "\t</tr>\n";
    }

    echo "<tbody>" . "</table>\n";
    fclose ($handle);
}
?>

<center>
<div class="button">
    <div class="button1">
    <?php
        if ($_SESSION['last'] < count($hoge) - 1) {
            echo "<input type=submit name=next value=next>";
        }
        ?>
    </div>
    <div class="button２">
        <?php
        if ($_SESSION['start'] !== 0) {
            echo "<input type=submit name=back value=back>";
        }
        ?>
    </div>
</div>
</center>

</div>
</body>
</html>
