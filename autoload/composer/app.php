<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */


$a = include 'vendor/autoload.php';
print_r($a);
/**
 * include composer加载vender/composer下的个文件
 *       [4] => E:\php-practice\autoload\composer\vendor\composer\autoload_static.php
 *
 * 这4个文件由composer自动生成  根据引入的包的设定的autoload 参数
 * [monolog]
 *  "autoload": {
 *   "psr-4": {"Monolog\\": "src/Monolog"}
 *   },
 *   "autoload-dev": {
 *   "psr-4": {"Monolog\\": "tests/Monolog"}
 *   },
 * [psr]
 * "autoload": {
 *       "psr-4": {
 *   "Psr\\Log\\": "Psr/Log/"
 * }
 *   },
 */

//autoload_psr4
//$vendorDir = dirname(dirname(__FILE__));
//$baseDir = dirname($vendorDir);
//
//return array(
//    'Psr\\Log\\' => array($vendorDir . '/psr/log/Psr/Log'),
//    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
//);
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$logger = new Logger('composer');
print_r(get_included_files());
print_r(spl_autoload_functions());
