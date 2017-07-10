<?php

class Books implements ArrayAccess
{
    public $pool = [];
    public function offsetSet($offset, $value)
    {
        return $this->pool[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->pool[$offset]);
    }

    public function offsetGet($offset)
    {
        if($this->offsetExists($offset)) {
            return $this->pool[$offset];
        }else{
            throw new Exception("$offset is not exists");
        }
    }

    public function offsetUnset($offset)
    {
        if($this->offsetExists($offset)) {
            unset($this->pool[$offset]);
        }
    }

    public function getPool(): array
    {
        return $this->pool;
    }
}

$books = new Books();
$books['a'] = 'a';
$books['b'] = 'b';
print_r($books->getPool());
print_r($books);
echo $books['c'];
