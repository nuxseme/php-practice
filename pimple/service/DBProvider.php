<?php


namespace app\service;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class DBProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['db'] = function ($pimple){
            $db = new DB($pimple['host'], $pimple['port']);
            return $db;
        };
    }

}