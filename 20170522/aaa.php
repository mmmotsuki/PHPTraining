<?php

//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';

$errors = array();

if(isset($_POST['submit']) && $_POST['submit'] === "ログイン"){

    $mail = $_POST['mail'];
    $password = $_POST['password'];

    if($mail === ""){
        $errors['mail'] = "メールアドレスが入力されていません。";
    }

    if($password === ""){
        $errors['password'] = "パスワードが入力されていません。";
    }
    else {
        header( 'Location:error.php' );
        exit;
    }

}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>初めてのPHP</title>
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
<form action="aaa.php" method="post">
<p>
メール：<input type="text" name="mail">
</p>
<p>
パスワード：<input type="password" name="password">
</p>
<p>
<input type="submit" name="submit" value="ログイン">
</p>
</form>
</body>
</html>
