<?php

namespace Doctrine\Instantiator\Exception;

use InvalidArgumentException as BaseInvalidArgumentException;
use ReflectionClass;
<<<<<<< HEAD

=======
use const PHP_VERSION_ID;
>>>>>>> parent of 31cfa1b1 (p)
use function interface_exists;
use function sprintf;
use function trait_exists;

/**
 * Exception for invalid arguments provided to the instantiator
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ExceptionInterface
{
<<<<<<< HEAD
    public static function fromNonExistingClass(string $className): self
=======
    public static function fromNonExistingClass(string $className) : self
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (interface_exists($className)) {
            return new self(sprintf('The provided type "%s" is an interface, and can not be instantiated', $className));
        }

<<<<<<< HEAD
        if (trait_exists($className)) {
=======
        if (PHP_VERSION_ID >= 50400 && trait_exists($className)) {
>>>>>>> parent of 31cfa1b1 (p)
            return new self(sprintf('The provided type "%s" is a trait, and can not be instantiated', $className));
        }

        return new self(sprintf('The provided class "%s" does not exist', $className));
    }

<<<<<<< HEAD
    /**
     * @template T of object
     * @phpstan-param ReflectionClass<T> $reflectionClass
     */
    public static function fromAbstractClass(ReflectionClass $reflectionClass): self
=======
    public static function fromAbstractClass(ReflectionClass $reflectionClass) : self
>>>>>>> parent of 31cfa1b1 (p)
    {
        return new self(sprintf(
            'The provided class "%s" is abstract, and can not be instantiated',
            $reflectionClass->getName()
        ));
    }
}
