<?php
class Ham
{
    public function __construct()
    {
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        echo 'hello invoke';
    }
}

$ham = new Ham();
$ham();