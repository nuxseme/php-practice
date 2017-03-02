<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */
include  'Sample.php';
include  'Master.php';
class Readfile implements Sample
{
    public function run($file)
    {
        ob_start();
        readfile($file);
        return ob_get_clean();
    }
}

$master = new Master();

$master->run(new Readfile());