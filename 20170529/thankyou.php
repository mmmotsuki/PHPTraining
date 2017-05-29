<html>
<head>
<title>送信完了</title>
</head>
<link rel="stylesheet" href="styles1.css">

<body>
<div class="main">

<h1>送信完了しました</h1>

<form action="otoiawase.php" method="get">

<center>
    <p id="no">
        <?php
        session_start();
        echo "お問い合わせ番号：" . str_pad($_SESSION['count'], 4, 0, STR_PAD_LEFT);
        ?>
    </p>
</center>
<br>

<center><div class="button">
    <input id="button" type="submit" name="modoru" value="ホームへ">
</center>

</div>
</body>
</html>
