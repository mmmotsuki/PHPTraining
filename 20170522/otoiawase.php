<!-- <?php

$errors = array();

if(isset($_POST['submit']) && $_POST['submit'] === "送信"){

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

    if($sei === ""){
        $errors['sei'] = "名前が入力されていません。";
    }
    if($mei === ""){
        $errors['mei'] = "名前が入力されていません。";
    }
    if($tell1 === "" || $tell2 === "" || $tell3 === "" ) {
        $errors['tell'] = "電話番号が入力されていません。";
    }
    if($mail1 === "" || $mail2 === "") {
        $errors['mail'] = "メールアドレスが入力されていません。";
    }
    else {
        header( 'Location:error.php' );
        exit;
    }

}
?> -->

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
    <input id="sei" type="text" name="sei" value="" required></td>

</tr>

<tr>
<td>名</td>
<td><label for="mei"></label>
    <input id="mei" type="text" name="mei" value="" required></td>
</tr>

<tr>
    <td>性別</td>
    <td>
        <label for="man"><input id="man" type="radio" name="seibetu" value="男" checked>男</labelL>
        <label for="woman"><input id="woman" type="radio" name="seibetu" value="女">女</label>
        <label for="other"><input id="other" type="radio" name="seibetu" value="不明">不明</label>
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
        <input id="tell1" type="text" name="tell1" value="" pattern="\d{1,5}" required>
    </label> -
    <label for="tell2">
        <input id="tell2" type="text" name="tell2" value="" pettern ="\d{1,4}" required>
    </label> -
    <label for="tell3">
        <input id="tell3" type="text" name="tell3" value="" pattern="\d{4,5}" required>
    </label>
</td>
</tr>

<tr>
<td>メールアドレス</td>
<td>
<p><label for="mail1"></label>
        <input id ="mail1" type="text" name="mail1" value="" required>
    </label> @
    <label for="mail2">
<input id="mail2" type="text" name="mail2" value="" required>
</label>
</p>
</td>
</tr>

<tr>
<td>どこで知ったか</td>
    <td>
        <input type="hidden" name="where" value="">
        <label for="magazine"><input id="magazine" type="checkbox" name="where" value="雑誌">雑誌</labelL>
        <label for="shinbun"><input id="shinbun" type="checkbox" name="where" value="新聞">新聞</label>
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
<td colspan="2"><center>
    <label for="button"></label>
    <input id="button" type="submit" name="Submit" value="送信">
    <input id="button" type="button" value="リセット" onclick="this.form.reset();">
</center></td>
</tr>

</tbody>
</table>
<br>

</form>
</body>
</html>
