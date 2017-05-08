<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

$regex = '/(\w+)@(\w+)\.(com|cn|net)/';

echo preg_match($regex,'406671554@qq.com');
 preg_match($regex,'qq@qq.net',$matches);
print_r($matches);
//preg_match_all();

$str = '<a href="http://www.5idev.com/">5idev</a>其他字符<a href="http://www.sohu.com/">sohu</a>';
$pattern = "/<a\s([\s\S]*?)>([\s\S]*?)<\/a>/i";
print preg_replace($pattern, '\\2', $str);
//$regex = "<img[\s]+src[\s]*=[\s]*((['\"](?<src>[^\'"]*)[\\'"])|(?<src>[^\s]*))";
//preg_match(,$str,$matches);
//print_r($matches);