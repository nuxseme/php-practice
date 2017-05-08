<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

$start = memory_get_usage();
function xrange($start, $end, $step = 1) {
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}

foreach (xrange(1, 1000000) as $num) {
    echo $num, "\n";
}

echo memory_get_usage()-$start;

$start = memory_get_usage();

foreach (range(1, 1000000) as $num) {
    echo $num, "\n";
}

echo memory_get_usage()-$start;