<?php

session_start();

if (isset($_GET['ANDbutton'])) {
    $_SESSION['keywords'] = $_GET['keywords'];
    $_SESSION['button'] = "AND";
    header('Location:search.php');
    exit;
}
elseif (isset($_GET['ORbutton'])) {
    $_SESSION['keywords'] = $_GET['keywords'];
    $_SESSION['button'] = "OR";
    header('Location:search.php');
    exit;
}

else {

    session_start();

    if (isset($_GET['next']) == NULL && isset($_GET['back']) == NULL) {
        $_SESSION['start'] = 0;
        $_SESSION['last'] = 1;
    }

    if (isset($_GET['next'])) {
        $_SESSION['start'] += 2;
        $_SESSION['last'] += 2;
    }
    elseif (isset($_GET['back'])) {
        $_SESSION['start'] -= 2;
        $_SESSION['last'] -= 2;
    }

    header('Location:itiran0.php');
}
?>