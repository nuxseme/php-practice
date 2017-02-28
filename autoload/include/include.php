<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */


/**
 * 回到最原始状态
 * 要用到类 需要包含进当前文件
 */

include  'A.php';
include "B.php";

$a = new A();
$b = new B();

print_r(get_included_files());

/**
 * 包含不同文件下相同的类会报错 因为程序不知道你想要实例化哪一个类
 */

//include 'other\A.php';
//
//$a = new A();
//Fatal error: Cannot declare class A, because the name is already in use in E:\php-practice\autoload\include\other\A.php on line 7


include 'other\B.php';

use other\B as BALIAS; //易混淆 或者较长路径的类 发展出别名
$b = new BALIAS();
$b->context();