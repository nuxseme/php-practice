<?php
//操作数组一样操作对象
class Books implements ArrayAccess
{
    private $values = [];
    public function offsetSet($offset, $value)
    {
        //key 唯一
        return $this->values[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->values[$offset]);
    }

    public function offsetGet($offset)
    {
        if($this->offsetExists($offset)) {
            return $this->values[$offset];
        }else{
            throw new Exception("$offset is not exists");
        }
    }

    public function offsetUnset($offset)
    {
        if($this->offsetExists($offset)) {
            unset($this->values[$offset]);
        }
    }

}

$books = new Books();
$books['a'] = 'a';
$books['b'] = 'b';
print_r($books);
echo $books['a'];
