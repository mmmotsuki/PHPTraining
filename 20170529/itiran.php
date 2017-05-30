<html>
<head>
<title>お問い合わせ一覧</title>
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
        <th id="check" width=20px;></th>
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

    <!-- <?php
    $file = "itiran.csv";
    if(($handle = fopen ($file, "r")) !== FALSE) {
        $k = 0;
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $data9 = implode(",", $data);
            echo "\t<tr>\n";
            echo "\t\t<td> <input type='checkbox' name='check[]' value='$data9'> </td>\n";
            for($i = 0; $i < count($data); $i++) {
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "<tbody>" . "</table>\n";
        fclose ($handle);
    }
    ?> -->

    <?php

    $file = "itiran.csv";
    if(($handle = fopen ($file, "r")) !== FALSE) {
        $k = 0;
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $data9 = implode(",", $data);
            echo "<label for='tr'>";
            echo "\t<tr id='tr'>\n";
            echo "\t\t<td> <input type='checkbox' name='check[]' value='$data9'> </td>\n";
            for($i = 0; $i < count($data); $i++) {
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
            echo "\t</tr>\n";
            echo "</label>";
        }
        echo "<tbody>" . "</table>\n";
        fclose ($handle);
    }
    ?>
<center>
    <div class="button">
        <input type="submit" name="checkbutton" value="詳細表示" onclick="form.action='bbb.php'; return true">
    </div>
</center>


</div>
</body>
</html>
