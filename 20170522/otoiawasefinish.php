<?php

$sei = $_GET['sei'];
$mei = $_GET['mei'];
$seibetu = $_GET['seibetu'];
$address = $_GET['address'];
$tell1 = $_GET['tell1'];
$tell2 = $_GET['tell2'];
$tell3 = $_GET['tell3'];
$mail1 = $_GET['mail1'];
$mail2 = $_GET['mail2'];
$where = $_GET['where'];
$category = $_GET['category'];
$situmon = $_GET['situmon'];

?>

<html>
<head>
<title>  </title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<center>お問い合わせ終了ページ</center>
<br>

<form action="otoiawasefinish.php" method="get">
<center>
<table border="1">
    <col width="130" align="center">
<col width="200" align="center">
<tbody>
<tr>
<td >姓</td>
<td><?php if($sei == null) {
    echo '<input type="text" value="" placeholder="abc" >';
}
else {
    echo "$sei";} ?></tr>

<tr>
<td>名</td>
<td><?php echo "$mei"; ?></td>
</tr>

<tr>
    <td>性別</td>
    <td><?php echo "$seibetu"; ?></td>
</tr>

<tr>
<td>住所</td>
<td><?php echo "$address"; ?></td>
</tr>

<tr>
<td>電話番号</td>
<td><?php echo "$tell1 - $tell2 - $tell3"; ?></td>
</tr>

<tr>
<td>メールアドレス</td>
<td>
<p><?php echo "$mail1 @ $mail2"; ?>
</p>
</td>
</tr>

<tr>
<td>どこで知ったか</td>
<td>
    <p>
        <?php echo "$where"; ?>
</p>
</td>
</tr>

<tr>
<td>質問カテゴリ</td>
<td><?php echo "$category"; ?></td>
</tr>

<tr><td><br></td></tr>

<tr>
<td>質問内容</td>
</tr>
<tr>
<td colspan="2" style="position:relative" height="200" valign="top">
<?php echo "$situmon"; ?>
</td>
</tr>

<tr>
<td colspan="2" style="position:relative" height="200" border="#0000ff" width="1">
    <label for="button"></label>
    <input id="button" type="submit" name="Submit" value="送信">
    <input id="button" type="button" value="リセット" onclick="this.form.reset();">
</td>
</tr>

</tbody>
</table>
<br>

</form>
</body>
</html>
