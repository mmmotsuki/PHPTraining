<?php
//関数の宣言
function local() {
    //グローバル変数の参照宣言
    global $var_global ;
}
$var_global = 5 ;

//関数の呼び出し
local();
echo $var_global;
?>
