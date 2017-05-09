<?php
function hello(){
    $hello = "Hello ";
    echo $hello;
}
$world = "world!";
$kitty = "kitty!";

hello();
echo $world;
echo nl2br("\n");
hello();
echo $kitty;
?>


<!--模範解答
 <?php
    $x = "Hello world!”;

    echo $x;
    echo”<br>”;
    echo str_replace("world", "kitty”, $x );;
?> -->
