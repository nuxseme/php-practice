<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */
include  'Sample.php';
include  'Master.php';
class Fpassthru implements Sample
{
    public function run($file)
    {
        $handle = fopen($file,'r');
        fpassthru($handle) ;
        //echo file_get_content
    }
}

$master = new Master();

$master->run(new Fpassthru());


