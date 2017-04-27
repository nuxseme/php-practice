<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

include 'Person.php';

$person = new Person(1,'ham',12);
print_r($person);

$object = new ReflectionClass('Person');
print_r($object);
print_r($object->getName());//获取当前反射类的名称   Person
print_r($object->getProperties());//获取当前反射类的属性
print_r($object->getFileName());//获取文件名，绝对路径
echo PHP_EOL;
print_r(ReflectionClass::export('Person'));//导出类

echo $object->getConstant('STATUS');
print_r($object->getConstants());//数组形式获取所有常量
print_r($object->getConstructor());//获取构造函数
print_r($object->getDefaultProperties());//获取默认属性值
print_r($object->getModifiers());//获取访问修饰符