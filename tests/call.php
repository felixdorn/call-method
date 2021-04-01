<?php

class _SomeObject
{
    protected function myMethod(string $name = 'John'): string
    {
        return 'My name is ' . $name;
    }
}

it('can call a method', function () {
    $object = new _SomeObject();
    expect(call($object, 'myMethod'))->toBe('My name is John');
});

it('can call a method with arguments', function () {
    $object = new _SomeObject();
    expect(call($object, 'myMethod', 'Jack'))->toBe('My name is Jack');
});

it('throws an exception if the method does not exist', function () {
    $object = new _SomeObject();
    call($object, 'propertyDoesNotExist');
})->throws(BadMethodCallException::class);
