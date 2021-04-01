<?php

if (!function_exists('call')) {
    /**
     * @param mixed ...$attributes
     *
     * @return mixed
     */
    function call(object $object, string $method, ...$attributes)
    {
        if (!method_exists($object, $method)) {
            throw new BadMethodCallException(sprintf('Call to undefined method %s::%s()', get_class($object), $method));
        }

        $reflection      = new ReflectionClass($object);
        $reflectedMethod = $reflection->getMethod($method);
        $reflectedMethod->setAccessible(true);

        return $reflectedMethod->invokeArgs($object, $attributes);
    }
}
