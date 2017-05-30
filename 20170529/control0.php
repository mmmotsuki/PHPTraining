<?php

session_start();
$_SESSION['keywords'] = $_GET['keywords'];

if (isset($_GET['ANDbutton'])) {
    $_SESSION['button'] = "AND";
    $_SESSION['ONOFF'] = "ON";
    header('Location:search2.php');
    exit;
}
elseif (isset($_GET['ORbutton'])) {
    $_SESSION['button'] = "OR";
    $_SESSION['ONOFF'] = "ON";
    header('Location:search2.php');
    exit;
}

    //
    // if (isset($_GET['next']) == NULL && isset($_GET['back']) == NULL) {
    //     $_SESSION['start'] = 0;
    //     $_SESSION['last'] = 1;
    // }

    if (isset($_GET['next'])) {
        $_SESSION['start'] += 2;
        $_SESSION['last'] += 2;
    }
    elseif (isset($_GET['back'])) {
        $_SESSION['start'] -= 2;
        $_SESSION['last'] -= 2;
    }

    header('Location:itiran0.php');

?>
