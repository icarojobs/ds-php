<?php

use Pest\Expectation;
use Tiojobs\DsPhp\Stack\Stack;

it('checks if stack size is zero after instantiation', function () {
    $stack = new Stack();

    expect($stack->size())->toBe(0);
});

it('checks if stack size is one after add an element', function () {
    $stack = new Stack();
    $stack->push('A simple string');

    expect($stack->size())->toBe(1);
});

it('checks if one element was removed of stack', function () {
    $stack = new Stack();
    $stack->push('String one');
    $stack->push('String two');
    $stack->pop();

    expect($stack->size())->toBe(1);
});

it('get all items of stack as array', function () {
  $stack = new Stack();
  $stack->push('String one');
  $stack->push('String two');

  expect($stack->all())
      ->toBeArray()
      ->each(function (Expectation $item) {
          $item->toBeString();
      });
});