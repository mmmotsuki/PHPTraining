<?php

session_start();
$_SESSION['sei'] = $_GET['sei'];
$_SESSION['mei'] = $_GET['mei'];
$_SESSION['seibetu'] = $_GET['seibetu'];
$_SESSION['address'] = $_GET['address'];
$_SESSION['name'] = $_GET['sei'] . " " . $_GET['mei'];
$_SESSION['tell'] = $_GET['tell1'] . "-" . $_GET['tell2'] . "-" . $_GET['tell3'];
$_SESSION['mail'] = $_GET['mail1'] . "@" . $_GET['mail2'];
$_SESSION['where1'] = $_GET['where1'];
$_SESSION['where2'] = $_GET['where2'];
$_SESSION['category'] = $_GET['category'];
$_SESSION['situmon'] = $_GET['situmon'];

?>

<html>
<head>
<title>  </title>
<link rel="stylesheet" href="styles1.css">
</head>
<body>
<div class="main">

<h1>内容確認ページ</h1>
<p class="sub">以下の内容にお間違いが無ければ、<span>送信ボタン</span>を押してください。</p>
<br>

<form action="control.php" method="get">

<table border="1">
<col width="100" align="center">
<col width="200" align="center">
<tbody>
<tr>
<td class="r1">お名前</td>
<td class="r2"><?php echo $_SESSION['name']; ?></td>
</tr>

<tr>
    <td class="r1">性別</td>
    <td class="r2"><?php echo $_SESSION['seibetu']; ?></td>
</tr>

<tr>
<td class="r1">住所</td>
<td class="r2" valign="top" height="60"><?php echo $_SESSION['address']; ?></td>
</tr>

<tr>
<td class="r1">電話番号</td>
<td class="r2"><?php echo $_SESSION['tell']; ?></td>
</tr>

<tr>
    <td class="r1">メールアドレス</td>
    <td class="r2"><?php echo $_SESSION['mail']; ?></td>
</tr>
<tr>
    <td class="r1">どこで知ったか</td>
    <td class="r2"><?php echo $_SESSION['where1'] . $_SESSION['where2']; ?></td>
</tr>
<tr>
    <td class="r1">質問カテゴリ</td>
    <td class="r2"><?php echo $_SESSION['category']; ?></td>
</tr>
<tr>
    <td class="r1">質問内容</td>
    <td class="r2" style="position:relative" height="200" valign="top"　border:1px solid #666666; position: absolute; table-layout:fixed;>
    <div id="situmon" table-layout:fixed;><?php echo $_SESSION['situmon']; ?></div></td>
</tr>
</tbody>
</table>

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
