<?php


class App
{
    protected $routes = [];
    protected $responseStatus = 200;
    protected $responseContentType = 'text/html';
    protected $responseBody = 'hello world';

    public function addRoute($route, $callback)
    {
        $this->routes[$route] = $callback->bindTo($this,__CLASS__);
    }

    public function dispatch($route)
    {
        if(isset($this->routes[$route])) {
            $callback = $this->routes[$route];
            $callback();
        }

        echo $this->responseContentType,$this->responseBody;
    }
}

$app = new App();
$app->addRoute('/index',function (){
    $this->responseContentType = 'application/json';
    $this->responseBody = 'I am index';
});
$app->addRoute('hello',function (){
    $this->responseContentType = 'world';
});
$app->dispatch('/index');
$app->dispatch('hello');


