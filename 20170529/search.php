<?php

session_start();

$file = fopen("itiran.csv", "r");   //お問い合わせ一覧情報ファイル
$fp = fopen("search.csv", "r+");    //一致情報一時保管用ファイル
ftruncate($fp, 0);                  //ファイルクリア
rewind( $fp );

//入力キーワードを空白区切りで配列に格納
$SearchArr = [];
$str = str_replace("　", " ", $_GET['keywords']);
$SearchArr = explode(" ", $str);

if ($file) {
    if (empty($SearchArr) !== FALSE) {
        //AND検索･･･文字列一致数＝キーワードの個数
        if (isset($_GET['ANDbutton'])) {
            while ($line = fgets($file)) {
                $flag = 0;  //一致数カウンタ
                for ($j = 0; $j < count($SearchArr); $j++) {
                    if (strpos($line, $SearchArr[$j]) !== FALSE) {
                        $flag++;
                    }
                }
                if ($flag == count($SearchArr)) {
                    foreach ($SearchArr as $val) {
                        $qq[] = "'(".preg_quote($val).")'i";
                    }
                    // 検索一致箇所に背景色をつける
                    fputs($fp, preg_replace($qq, "<span style=background-color:#FFFFA9;>$1</span>", $line));
                    // fputs($fp, $line);
                }
            }
        }

        //OR検索･･･文字列一致数>0
        elseif (isset($_GET['ORbutton'])) {
            while ($line = fgets($file)) {
                $flag = 0;  //一致数カウンタ
                for ($j = 0; $j < count($SearchArr); $j++) {
                    if (strpos($line, $SearchArr[$j]) !== FALSE) {
                        $flag++;
                        break;
                    }
                }
                if ($flag > 0) {
                    foreach ($SearchArr as $val) {
                        $qq[] = "'(".preg_quote($val).")'i";
                    }
                    // 検索一致箇所に背景色をつける
                    fputs($fp, preg_replace($qq, "<span style=background-color:#FFFFA9;>$1</span>", $line));
                    // fputs($fp, $line);
                }
            }
        }
    }
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
<p class="sub">検索パラメータ：<span><?php echo $_GET['keywords']; ?></p>

<table>
    <tbody>
    <tr>
    <th id="no">No.</th>
    <th id="name">氏名</th>
    <th id="sex" width=50px>性別</th>
    <th id="address">住所</th>
    <th id="tell">電話番号</th>
    <th id="mail">メールアドレス</th>
    <th id="where">どこで知った</th>
    <th id="category">質問カテゴリ</th>
    <th id="situmon">質問内容</th>
    </tr>

    <?php

    $file = "search.csv";
    if (($handle = fopen ($file, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            echo "\t<tr>\n";
            for ($i = 0; $i < count($data); $i++) {
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "<tbody>" . "</table>\n";
        ftruncate($handle, 0);
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
