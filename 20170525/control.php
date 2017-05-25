<?php

if (isset($_GET['soushin'])) {
    header( 'Location:soushin.php' );
    exit;
}
elseif ( isset($_GET['modoru']) ){
    header( 'Location:otoiawase.php' );
    exit;
}

?>
