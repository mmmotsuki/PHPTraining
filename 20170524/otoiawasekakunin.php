<?php

session_start();
$_SESSION['sei'] = $_GET['sei'];
$_SESSION['mei'] = $_GET['mei'];
$_SESSION['seibetu'] = $_GET['seibetu'];
$_SESSION['address'] = $_GET['address'];
$_SESSION['tell1'] = $_GET['tell1'];
$_SESSION['tell2'] = $_GET['tell2'];
$_SESSION['tell3'] = $_GET['tell3'];
$_SESSION['mail1'] = $_GET['mail1'];
$_SESSION['mail2'] = $_GET['mail2'];
$_SESSION['where'] = $_GET['where'];
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
<center>
<table border="1">
<col width="130" align="center">
<col width="200" align="center">
<tbody>
<tr>
<td >姓</td>
<td><?php echo $_SESSION['sei']; ?></tr>

<tr>
<td>名</td>
<td><?php echo $_SESSION['mei']; ?></td>
</tr>

<tr>
    <td>性別</td>
    <td><?php echo $_SESSION['seibetu']; ?></td>
</tr>

<tr>
<td  valign="top">住所</td>
<td   valign="top" height="60"><?php echo $_SESSION['address']; ?></td>
</tr>

<tr>
<td>電話番号</td>
<td><?php echo $_SESSION['tell1'] . " - " . $_SESSION['tell2'] . " - " . $_SESSION['tell3']; ?></td>
</tr>

<tr>
    <td>メールアドレス</td>
    <td><?php echo $_SESSION['mail1'] . " @ " . $_SESSION['mail2']; ?></td>
</tr>
<tr>
    <td>どこで知ったか</td>
    <td><?php echo $_SESSION['where']; ?></td>
</tr>
<tr>
    <td>質問カテゴリ</td>
    <td><?php echo $_SESSION['category']; ?></td>
</tr>
<tr><td><br></td></tr>
<tr>
    <td>質問内容</td>
</tr>
<tr>
    <td colspan="2" style="position:relative" height="200" valign="top"　border:1px solid #666666; position: absolute; table-layout:fixed;>
    <div id="situmon" table-layout:fixed;><?php echo $_SESSION['situmon']; ?></div></td>
</tr>

<tr>
    <td colspan="2"><center>
    <label for="button"></label>
    <input id="button" type="submit" name="soushin" value="送信">
    <input id="button" type="submit" name="modoru" value="戻る">
</center></td>
</tr>

</tbody>
</table>
</form>
</div>
</body>
</html>
