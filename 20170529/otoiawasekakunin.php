<?php

session_start();

$_SESSION['sex'] = $_POST['sex'];
$_SESSION['address'] = $_POST['address1'] . "  " . $_POST['address2'] . "  " . $_POST['address3'] . "  " . $_POST['address4'];
$_SESSION['name'] = $_POST['sei'] . " " . $_POST['mei'];
$_SESSION['tell'] = $_POST['tell1'] . "-" . $_POST['tell2'] . "-" . $_POST['tell3'];
$_SESSION['mail'] = $_POST['mail1'] . "@" . $_POST['mail2'];
$_SESSION['category'] = $_POST['category'];
$_SESSION['situmon'] = str_replace(array("\r\n", "\r", "\n"), "<br />", $_POST['situmon']);

if($_POST['where1'] !== "" && $_POST['where2'] !== "") {
    $_SESSION['where'] = $_POST['where1'] . "、" . $_POST['where2'];
}
else {
    $_SESSION['where'] = $_POST['where1'] . $_POST['where2'];
}

?>

<html>
<head>
<title> 内容確認</title>
<link rel="stylesheet" href="styles1.css">
</head>

<body>
<div class="main">

<h1>内容確認ページ</h1>
<p class="sub">以下の内容にお間違いが無ければ、<span>送信ボタン</span>を押してください。</p>
<br>

<form action="control.php" method="get">

<div id="table">

    <div class="row">
        <div class="r1"> お名前<span>※</span> </div>
        <div class="r2">
            <?php echo $_SESSION['name']; ?>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 性別 </div>
        <div class="r2">
            <?php echo $_SESSION['sex']; ?>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 住所 </div>
        <div class="r2">
            <?php echo $_SESSION['address']; ?>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 電話番号<span>※</span> </div>
        <div class="r2">
            <?php echo $_SESSION['tell']; ?>
        </div>
    </div>

    <div class="row">
        <div class="r1">メールアドレス<span>※</span></div>
            <div class="r2">
            <p>
                <?php echo $_SESSION['mail']; ?>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="r1"> どこで知ったか </div>
        <div class="r2">
            <?php echo $_SESSION['where']; ?>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 質問カテゴリ </div>
        <div  class="r2">
            <?php echo $_SESSION['category']; ?>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 質問内容 </div>
        <div class="r2">
            <p id="situmon1"><?php echo $_SESSION['situmon']; ?> </p>
        </div>
    </div>
</div>

<center><div class="button">
    <label for="button"></label>
    <input id="button" type="submit" name="soushin" value="送信">　　　
    <input id="button" type="submit" name="modoru" value="戻る">
</center>
</div>

</form>
</div>
</body>
</html>
