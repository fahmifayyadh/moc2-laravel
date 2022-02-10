<?php

namespace Doctrine\Instantiator;

use Doctrine\Instantiator\Exception\ExceptionInterface;

/**
 * Instantiator provides utility methods to build objects without invoking their constructors
 */
interface InstantiatorInterface
{
    /**
     * @param string $className
     *
     * @return object
     *
     * @throws ExceptionInterface
<<<<<<< HEAD
     *
     * @template T of object
     * @phpstan-param class-string<T> $className
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function instantiate($className);
}
