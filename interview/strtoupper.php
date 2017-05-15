<?php
function mystrtoupper($a){
    $b = str_split($a, 1);
    $r = '';
    foreach($b as $v){
        $v = ord($v);
        if($v >= 97 && $v<= 122){
            $v -= 32;
        }
        $r .= chr($v);
    }
    return $r;
}


$a = 'a中你继续F@#$%^&*(BMDJFDoalsdkfjasl';
echo 'origin string:'.$a."
";
echo 'result string:';
$r = mystrtoupper($a);
var_dump($r);