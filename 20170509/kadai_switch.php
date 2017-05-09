<?php

$color="赤";

switch($color){

    case "赤":
       print("あなたの好きな色は赤!");
       break;

    case "青":
       print("あなたの好きな色は青!");
       break;

    case "白":
        print("あなたの好きな色は白!");
        break;

    default:
        print("あなたの好きな色はありません");
        break;

}

?>

<!--模範解答
<?php

    $favcolor = "赤";
    switch ($favcolor) {
        case "赤":
               echo "あなたの好きな色が赤!";
               break;
        case "青":
               echo "あなたの好きな色が青!";
               break;
        case "白":
              echo "あなたの好きな色が白!";
              break;
        default:
             echo "あなたの好きな色が上の中ない!";
            break;
    }
?>  -->
