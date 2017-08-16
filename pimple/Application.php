<?php


namespace app;


use app\service\DBProvider;
use app\service\LogProvider;
use Pimple\Container;

class Application
{
    private $container;
    private $defaultProviders = [
        DBProvider::class,
        LogProvider::class
    ];
    public function __construct($config)
    {
        $this->container = new Container();
        $this->registerDefaultProviders();
    }

    public function registerDefaultProviders()
    {
        foreach ($this->defaultProviders as $provider) {
            $provider->register($this->container);
        }
    }

}