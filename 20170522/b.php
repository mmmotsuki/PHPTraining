<?php
//初期化
$uname = '';
$email = '';
$message = '';

session_start();
if(isset($_SESSION['uname'])){
  $uname = $_SESSION['uname'];
}
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
}
if(isset($_SESSION['message'])){
  $message = $_SESSION['message'];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>フォーム実践</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>入力画面</h1>
<p>必要事項を入力して「確認する」ボタンをクリックしてください。</p>
<form method="post" action="check.php">
<table>
<tr>
<th>お名前</th><td><input type="text" name="uname" size="30" value="<?php echo $uname; ?>"></td>
</tr>
<tr>
<th>メールアドレス</th><td><input type="text" name="email" size="30" value="<?php echo $email; ?>"></td>
</tr>
<tr>
<th>メッセージ</th><td><textarea rows="5" cols="30" name="message" value="<?php echo nl2br($message); ?>"></textarea></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="sub1" value="確認する"></td>
</tr>
</table>
</form>
</body>
</html>
