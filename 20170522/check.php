<?php
//issetは変数の中に値があるか、もしくは変数自体が存在するか確認する関数
if (!isset( $_POST[ 'uname' ] ) || !isset( $_POST[ 'email' ] )||!isset( $_POST[ 'message' ] )){
  // 'Location:パス(path)でその場所に遷移する'
  header( 'Location:index.php' );
  exit;
}

$errors = array();

if(isset($_POST['sub1']) && $_POST['sub1'] === "確認"){

    $name = $_POST['uname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if($name === ""){
        $errors['uname'] = "メールアドレスが入力されていません。";
    }

    if($email === ""){
        $errors['email'] = "パスワffsdfdードが入力されていません。";
    }
    if($message === ""){
        $errors['message'] = "aaaパスワードが入力されていません。";
    }

}

// // 入力値のチェック
// if (empty($_POST[ 'uname' ])) {
//   echo 'お名前を入力してください。';
//   exit;
//
// }
// if (empty($_POST[ 'email' ])) {
//   echo 'メールアドレスを入力してください。';
//   exit;
// }
// if (empty($_POST[ 'message' ])) {
//   echo 'メッセージを入力してください。';
//   exit;
// }

// // 入力値の取得・加工
// $uname = htmlspecialchars( $_POST[ 'uname' ], ENT_QUOTES, 'UTF-8' );
// $email = htmlspecialchars( $_POST[ 'email' ], ENT_QUOTES, 'UTF-8');
// $message = htmlspecialchars( $_POST[ 'message' ], ENT_QUOTES, 'UTF-8' );
//
// // セッションの開始
// session_start();
// $_SESSION[ 'uname' ] = $uname;
// $_SESSION[ 'email' ] = $email;
// $_SESSION[ 'message' ] = $message;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>メールフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo "<ul>";
    foreach($errors as $message){
        echo "<li>";
        echo $message;
        echo "</li>";
    }
    echo "</ul>";
    ?>
<h1>確認画面</h1>
<p>内容を確認してください。</p>
<form action="index.php" method="post">
<table>
<tr>
<td>お名前</td><td width="300"><?php echo $name; ?></td>
</tr>
<tr>
<td>メールアドレス</td>
<td width="300"><?php echo $email; ?></td>
</tr>
<tr>
<td>メッセージ</td>
<td width="300"><?php echo nl2br($message); ?></td>
</tr>
<tr>
<td align="right" colspan="2">
<input type="submit" name="sub1" value="送信する">
</td>
</tr>
</table>
</form>
</body>
</html>
