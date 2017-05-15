<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

function quick_sort($array) {
    if (count($array) <= 1) return $array;
    $key = $array[0];
    $left_arr = array();
    $right_arr = array();
    for ($i=1; $i<count($array); $i++){

        if ($array[$i] <= $key)

            $left_arr[] = $array[$i];
        else
            $right_arr[] = $array[$i];
    }
    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);
    return array_merge($left_arr, array($key), $right_arr);
}


function quicksort($array) {
    //每次剩一个元素直接返回
    if(count($array) <= 1) return $array;

    //对数组排序  遍历数组，第一个值作为起始点，将元素划分为左右两部分，对剩下的部分递归排序
    $flag = $array[0];
    $left_array = [];
    $right_array = [];
    for($i=1;$i<=count($array);$i++) {
        if($array[$i] <= $flag) {
            array_push($left_array, $array[$i]);
        }else {
            array_push($right_array, $array[$i]);
        }
    }
    return array_merge(quick_sort($left_array),$array[0],quick_sort($right_array));
}

print_r(quick_sort([5,1,4,7,9,3,2]));


echo strrev('expame aa');
echo strtotime('2014-09-23 23:08:01');