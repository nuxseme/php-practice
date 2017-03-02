<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */
include  'Sample.php';
include  'Master.php';
class FileGetContent implements Sample
{
    public function run($file)
    {
       return file_get_contents($file);
    }
}

$master = new Master();

$master->run(new FileGetContent());