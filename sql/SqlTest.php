<?php

$queue = new SplQueue();
$queue->setIteratorMode(SplQueue::IT_MODE_FIFO);
$queue->enqueue('key1');
$queue->enqueue('key2');
$queue->enqueue('key3');
$queue->enqueue('key4');
print_r($queue);
foreach ($queue as $value) {
    echo $value;
}
print_r($queue);


$stack = new SplStack();
$stack->push('value1');
$stack->push('value2');
$stack->push('value3');
$stack->push('value4');
print_r($stack);
$stack->pop();
print_r($stack);
$stack->push('value5');
print_r($stack);