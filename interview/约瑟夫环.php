<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

function king($n, $m){
    $monkeys = range(1, $n);
    $i=0;
    $k=$n;
    while (count($monkeys)>1) {
        if(($i+1)%$m==0) {
            unset($monkeys[$i]);
        } else {
            array_push($monkeys,$monkeys[$i]);
            unset($monkeys[$i]);
        }
        $i++;
    }
    return current($monkeys);
}

$a = king(5, 2);
var_dump($a);
