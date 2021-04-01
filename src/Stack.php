<?php

class Stack
{
    private SplDoublyLinkedList $elements;

    public function __construct() {
        $this->elements = new \SplDoublyLinkedList();
    }

    public function size(): int {
        return $this->elements->count();
    }

    public function push(mixed $element): void
    {
        $this->elements->push($element);
    }

    public function pop(): mixed
    {
        try {
            $element = $this->elements->pop();

            return $element;
        } catch (\RuntimeException $exception) {
            throw new \Exception("Não existe item na pilha: {$exception->getMessage()}");
        }
    }
}

$stack = new Stack();
$stack->push('Tio Jobs');
$stack->push('Tio Wallas');
$stack->push('Tio Átila');
$stack->push('Tio Beto');
$stack->push('Tio Jhonny');

$result = $stack->pop();

var_dump($result);
var_dump($stack->size());