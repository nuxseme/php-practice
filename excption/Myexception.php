<?php

//set_exception_handler(function (Exception $e){
//
//    echo 'my exception ',$e->getMessage(),PHP_EOL;
//});

require "vendor/autoload.php";

$whoops = new \Whoops\Run();
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
$whoops->register();

class Myexception
{
    public function hello()
    {
        try {
            //throw new Exception('throw a exception');
        } catch (Exception $e) {
            echo 'i catch a exception',$e->getMessage(),PHP_EOL;

            throw new Exception('throw a again');
        } finally {
            echo 'finally',PHP_EOL;
        }
    }
    public function world()
    {
        try {
            throw new Exception('throw a exception');
        } catch (Exception $e) {
            echo 'i catch a world exception',$e->getMessage(),PHP_EOL;

            throw new Exception('throw a again');
        } finally {
            echo 'finally',PHP_EOL;
        }
    }
}

$obj = new Myexception();
$obj->hello();

restore_exception_handler();
$obj->world();