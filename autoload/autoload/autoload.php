<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

/**
 * include 会带来一个问题
 * 可能需要include 大量的文件
 * 需求：对引入类文件独立出来，封装 最好能自动include
 *
 * 实例化的时候，找不到类的时候回自动调用__autoload 方法
 * __autoload 处理include的逻辑，解析类，组装路径，包含文件
 *
 * 这个时候就能轻松的实例化各种类，只要对应的类文件能被autoload的逻辑包含进来即可
 * 但是又出现了问题，对于多个项目的包含逻辑不一定相同 引入spl_autoload_register
 *
 */

//function __autoload($class)
//{
//    require $class.'.php';
//}
//
//$c = new C();
//$c->context();

function autoload($class)
{
    require $class.'.php';
}

function auto_load($class)
{
    require 'other/'.$class.'.php';
}
//spl_autoload_register('auto_load');
//spl_autoload_register('autoload');
//$c = new C();
//$c->context();//E:\php-practice\autoload\autoload\other\C.php

//spl_autoload_register('autoload');
//spl_autoload_register('auto_load');
//
//$c = new C();
//$c->context();//E:\php-practice\autoload\autoload\C.php

/**
 * spl_autoload_register 可注册多个 顺序执行,成功之后不会继续执行
 */

spl_autoload_register('autoload');
//spl_autoload_unregister('autoload');
spl_autoload_register('auto_load');

$c = new C();
$c->context();//E:\php-practice\autoload\autoload\other\C.php