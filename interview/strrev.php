<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */


//en
echo strrev('hello world');
//zh
echo strrev('hello world,你好');

function reverse($str, $encoding='utf-8'){

    $result = '';
    for($i=mb_strlen($str);$i>=0;$i--) {
        $result .= mb_substr($str,$i,1,$encoding);
    }
    return $result;
}

echo reverse('hello你好world');