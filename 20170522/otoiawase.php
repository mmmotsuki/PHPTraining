<html>
<head>
<title>  </title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<center>お問い合わせ</center>
<br>

<form action="otoiawasefinish.php" method="get">
<center>
<table border="1">
    <col width="130" align="center">
<col width="200" align="center">
<tbody>
<tr>
<td >姓</td>
<td><label for="sei"></label>
    <input id="sei" type="text" name="sei" value=""></td>
</tr>

<tr>
<td>名</td>
<td><label for="mei"></label>
    <input id="mei" type="text" name="mei" value=""></td>
</tr>

<tr>
    <td>性別</td>
    <td>
        <input id="man" type="radio" name="seibetu" value="男" checked><label for="男">男</labelL>
        <input id="woman" type="radio" name="seibetu" value="女"><label for="女">女</label>
        <input id="other" type="radio" name="seibetu" value="不明"><label for="不明">不明</label>
    </td>
</tr>

<tr>
<td>住所</td>
<td><label for="address"></label>
    <input id="address" type="text" name="address" value=""></td>
</tr>

<tr>
<td>電話番号</td>
<td><label for="tell1">
        <input id="tell1" type="text" name="tell1" value="">
    </label> -
    <label for="tell2">
        <input id="tell2" type="text" name="tell2" value="">
    </label> -
    <label for="tell3">
        <input id="tell3" type="text" name="tell3" value="">
    </label>
</td>
</tr>

<tr>
<td>メールアドレス</td>
<td>
<p><label for="mail1"></label>
        <input id ="mail1" type="text" name="mail1" value="">
    </label> @
    <label for="mail2">
<input id="mail2" type="text" name="mail2" value="">
</label>
</p>
</td>
</tr>

<tr>
<td>どこで知ったか</td>
<td>
    <p>
        <input id="magazine" type="checkbox" name="where" value="雑誌"><label for="雑誌">雑誌</labelL>
        <input id="shinbun" type="checkbox" name="where" value="新聞"><label for="新聞">新聞</label>
</p>
</td>
</tr>

<tr>
<td>質問カテゴリ</td>
<td><label for="category">
    <input id="category" type="text" name="category" value="">
    </label></td>
</tr>

<tr><td><br></td></tr>

<tr>
<td>質問内容</td>
</tr>
<tr>
<td colspan="2" style="position:relative" height="200">
    <label for="situmon"></label>
    <textarea id="situmon" name="situmon" style="box-sizing:border-box" \></textarea>
</td>
</tr>

<tr>
<td colspan="2">
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
