<?php

declare(strict_types=1);

namespace Tiojobs\DsPhp\Stack;

use SplDoublyLinkedList;

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
            return $this->elements->pop();
        } catch (\RuntimeException $exception) {
            throw new \Exception("Não existe item na pilha: {$exception->getMessage()}");
        }
    }

    public function all(): array
    {
        $items = [];

        foreach ($this->elements as $element) {
            $items[] = $element;
        }

        return $items;
    }
}