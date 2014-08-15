<?php
$number = 247;
//    $number = 145;
//    $number = 15;
$arr = [];
for ($i = 0;$i <= $number; $i++) {
    if($i >= 100 && $i <= 999 ) {
        if ((strval($i)[0] != strval($i)[1] && strval($i)[1] != strval($i)[2] && strval($i)[2] != strval($i)[0]))  {
            $arr = $i;
            echo "\n" . $arr;
        }
    }
}
if ($number < 100) {
    echo "no";
}
?>