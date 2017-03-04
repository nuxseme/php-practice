<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */
include  'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\MongoDBHandler;
$log_path = 'log';
// create a log channel
$log = new Logger('test');



$log->pushHandler(new StreamHandler($log_path, Logger::DEBUG));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
$log->pushProcessor(function ($record) {
    $record['extra']['dummy'] = 'Hello world!';

    return $record;
});
$log->info('info',['hello'=>'world']);


