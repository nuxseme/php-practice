<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

function hanoi($n,$x,$y,$z){
    if($n==1){
        echo 'move disk 1 from '.$x.' to '.$z."\n";
    }else{
        hanoi($n-1,$x,$z,$y);
        echo 'move disk '.$n.' from '.$x.' to '.$z."\n";
        hanoi($n-1,$y,$x,$z);
    }
}
hanoi(3,'A','B','C');
