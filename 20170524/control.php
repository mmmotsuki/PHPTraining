<?php

session_start();
    if (isset($_GET['soushin'])) {
        echo $_SESSION['sei'];
        header( 'Location:soushin.php' );
        exit;
    }
    elseif ( isset($_GET['modoru']) ){
        header( 'Location:otoiawase.php' );
        exit;
    }

?>
