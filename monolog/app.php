<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */
include  'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
include  'handler\MongoDBHandler.php';
$log_path = 'log';
// create a log channel
$log = new Logger('test');




$log->pushHandler(new StreamHandler($log_path, Logger::DEBUG));

$manager = new \MongoDB\Driver\Manager('mongodb://192.168.107.231:27017');
$mongoDBHandler = new \monolog\handler\MongoDBHandler($manager,'php.log',Logger::DEBUG);
$log->pushHandler(new StreamHandler($log_path, Logger::WARNING));
$log->pushHandler($mongoDBHandler);

// add records to the log
$log->pushProcessor(function ($record) {
    $record['extra']['dummy'] = 'Hello world!';

    return $record;
});
$log->warning('Foo bubble false');
$log->error('Bar');
$log->pushProcessor(function ($record) {
    $record['extra']['dummy'] = 'Hello world!';

    return $record;
});
$log->info('info',['hello'=>'world']);


