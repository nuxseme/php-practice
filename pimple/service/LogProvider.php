<?php


namespace app\service;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class LogProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['log'] = function ($pimple){
            return  new Log($pimple['path']);
        };
    }
}