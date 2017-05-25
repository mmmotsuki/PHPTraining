<html>
<head>
<title>  </title>
</head>
<link rel="stylesheet" href="styles1.css">
<div class="main">
<body>
<h1>送信完了しました</h1>
<form action="control.php" method="get">
<center>
<?php
session_start();
echo "お問い合わせ番号：" . str_pad($_SESSION['count'], 4, 0, STR_PAD_LEFT);
?>
</center>
<br>
<center><div class="button">
    <label for="button"></label>
<input id="button" type="submit" name="modoru" value="戻る">
</center>
</div>
<br>
</form>
</body>
</div>
</html>
