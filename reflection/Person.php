<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

class Person
{
    const STATUS = 1;
    static $a = 1;
    private $name = 'default';
    protected $age;
    public $id;

    public function __construct($id=1, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    public static function getName()
    {
        return static::$a;
    }
    private function getAge()
    {
        return $this->age;
    }
}

