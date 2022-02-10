<?php

/**
 * provides type inference and auto-completion for magic static methods of Assert.
 */

namespace Webmozart\Assert;

use ArrayAccess;
use Closure;
use Countable;
<<<<<<< HEAD
use Throwable;

/**
 * This trait aids static analysis tooling in introspecting assertion magic methods.
 * Do not use this trait directly: it will change, and is not designed for reuse.
 */
trait Mixin
{
    /**
     * @psalm-pure
     * @psalm-assert string|null $value
=======
use InvalidArgumentException;
use Throwable;

interface Mixin
{
    /**
     * @psalm-pure
     * @psalm-assert null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrString($value, $message = '')
    {
        static::__callStatic('nullOrString', array($value, $message));
    }
=======
     */
    public static function nullOrString($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allString($value, $message = '')
    {
        static::__callStatic('allString', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert non-empty-string|null $value
=======
     */
    public static function allString($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|non-empty-string $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrStringNotEmpty($value, $message = '')
    {
        static::__callStatic('nullOrStringNotEmpty', array($value, $message));
    }
=======
     */
    public static function nullOrStringNotEmpty($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<non-empty-string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allStringNotEmpty($value, $message = '')
    {
        static::__callStatic('allStringNotEmpty', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert int|null $value
=======
     */
    public static function allStringNotEmpty($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|int $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrInteger($value, $message = '')
    {
        static::__callStatic('nullOrInteger', array($value, $message));
    }
=======
     */
    public static function nullOrInteger($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<int> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allInteger($value, $message = '')
    {
        static::__callStatic('allInteger', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert numeric|null $value
=======
     */
    public static function allInteger($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|numeric $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIntegerish($value, $message = '')
    {
        static::__callStatic('nullOrIntegerish', array($value, $message));
    }
=======
     */
    public static function nullOrIntegerish($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<numeric> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIntegerish($value, $message = '')
    {
        static::__callStatic('allIntegerish', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert positive-int|null $value
=======
     */
    public static function allIntegerish($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|float $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrPositiveInteger($value, $message = '')
    {
        static::__callStatic('nullOrPositiveInteger', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<positive-int> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function allPositiveInteger($value, $message = '')
    {
        static::__callStatic('allPositiveInteger', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert float|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrFloat($value, $message = '')
    {
        static::__callStatic('nullOrFloat', array($value, $message));
    }
=======
     */
    public static function nullOrFloat($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<float> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allFloat($value, $message = '')
    {
        static::__callStatic('allFloat', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert numeric|null $value
=======
     */
    public static function allFloat($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|numeric $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNumeric($value, $message = '')
    {
        static::__callStatic('nullOrNumeric', array($value, $message));
    }
=======
     */
    public static function nullOrNumeric($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<numeric> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNumeric($value, $message = '')
    {
        static::__callStatic('allNumeric', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert positive-int|0|null $value
=======
     */
    public static function allNumeric($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|int $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNatural($value, $message = '')
    {
        static::__callStatic('nullOrNatural', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<positive-int|0> $value
=======
     */
    public static function nullOrNatural($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert iterable<int> $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNatural($value, $message = '')
    {
        static::__callStatic('allNatural', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert bool|null $value
=======
     */
    public static function allNatural($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|bool $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrBoolean($value, $message = '')
    {
        static::__callStatic('nullOrBoolean', array($value, $message));
    }
=======
     */
    public static function nullOrBoolean($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<bool> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allBoolean($value, $message = '')
    {
        static::__callStatic('allBoolean', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert scalar|null $value
=======
     */
    public static function allBoolean($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|scalar $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrScalar($value, $message = '')
    {
        static::__callStatic('nullOrScalar', array($value, $message));
    }
=======
     */
    public static function nullOrScalar($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<scalar> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allScalar($value, $message = '')
    {
        static::__callStatic('allScalar', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert object|null $value
=======
     */
    public static function allScalar($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|object $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrObject($value, $message = '')
    {
        static::__callStatic('nullOrObject', array($value, $message));
    }
=======
     */
    public static function nullOrObject($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<object> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allObject($value, $message = '')
    {
        static::__callStatic('allObject', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert resource|null $value
=======
     */
    public static function allObject($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|resource $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrResource($value, $type = null, $message = '')
    {
        static::__callStatic('nullOrResource', array($value, $type, $message));
    }
=======
     */
    public static function nullOrResource($value, $type = null, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<resource> $value
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allResource($value, $type = null, $message = '')
    {
        static::__callStatic('allResource', array($value, $type, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert callable|null $value
=======
     */
    public static function allResource($value, $type = null, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|callable $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsCallable($value, $message = '')
    {
        static::__callStatic('nullOrIsCallable', array($value, $message));
    }
=======
     */
    public static function nullOrIsCallable($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<callable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsCallable($value, $message = '')
    {
        static::__callStatic('allIsCallable', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert array|null $value
=======
     */
    public static function allIsCallable($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|array $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsArray($value, $message = '')
    {
        static::__callStatic('nullOrIsArray', array($value, $message));
    }
=======
     */
    public static function nullOrIsArray($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<array> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsArray($value, $message = '')
    {
        static::__callStatic('allIsArray', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable|null $value
=======
     */
    public static function allIsArray($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|iterable $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsTraversable($value, $message = '')
    {
        static::__callStatic('nullOrIsTraversable', array($value, $message));
    }
=======
     */
    public static function nullOrIsTraversable($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<iterable> $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsTraversable($value, $message = '')
    {
        static::__callStatic('allIsTraversable', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert array|ArrayAccess|null $value
=======
     */
    public static function allIsTraversable($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|array|ArrayAccess $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsArrayAccessible($value, $message = '')
    {
        static::__callStatic('nullOrIsArrayAccessible', array($value, $message));
    }
=======
     */
    public static function nullOrIsArrayAccessible($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<array|ArrayAccess> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsArrayAccessible($value, $message = '')
    {
        static::__callStatic('allIsArrayAccessible', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert countable|null $value
=======
     */
    public static function allIsArrayAccessible($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|countable $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsCountable($value, $message = '')
    {
        static::__callStatic('nullOrIsCountable', array($value, $message));
    }
=======
     */
    public static function nullOrIsCountable($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<countable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsCountable($value, $message = '')
    {
        static::__callStatic('allIsCountable', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable|null $value
=======
     */
    public static function allIsCountable($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|iterable $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsIterable($value, $message = '')
    {
        static::__callStatic('nullOrIsIterable', array($value, $message));
    }
=======
     */
    public static function nullOrIsIterable($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<iterable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsIterable($value, $message = '')
    {
        static::__callStatic('allIsIterable', array($value, $message));
    }
=======
     */
    public static function allIsIterable($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
<<<<<<< HEAD
     * @psalm-assert ExpectedType|null $value
=======
     * @psalm-assert null|ExpectedType $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsInstanceOf($value, $class, $message = '')
    {
        static::__callStatic('nullOrIsInstanceOf', array($value, $class, $message));
    }
=======
     */
    public static function nullOrIsInstanceOf($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<ExpectedType> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsInstanceOf($value, $class, $message = '')
    {
        static::__callStatic('allIsInstanceOf', array($value, $class, $message));
    }
=======
     */
    public static function allIsInstanceOf($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotInstanceOf($value, $class, $message = '')
    {
        static::__callStatic('nullOrNotInstanceOf', array($value, $class, $message));
    }
=======
     */
    public static function nullOrNotInstanceOf($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotInstanceOf($value, $class, $message = '')
    {
        static::__callStatic('allNotInstanceOf', array($value, $class, $message));
    }
=======
     */
    public static function allNotInstanceOf($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param mixed                $value
     * @param array<object|string> $classes
     * @param string               $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsInstanceOfAny($value, $classes, $message = '')
    {
        static::__callStatic('nullOrIsInstanceOfAny', array($value, $classes, $message));
    }
=======
     */
    public static function nullOrIsInstanceOfAny($value, $classes, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param mixed                $value
     * @param array<object|string> $classes
     * @param string               $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsInstanceOfAny($value, $classes, $message = '')
    {
        static::__callStatic('allIsInstanceOfAny', array($value, $classes, $message));
    }
=======
     */
    public static function allIsInstanceOfAny($value, $classes, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
<<<<<<< HEAD
     * @psalm-assert ExpectedType|class-string<ExpectedType>|null $value
     *
     * @param object|string|null $value
=======
     * @psalm-assert null|ExpectedType|class-string<ExpectedType> $value
     *
     * @param null|object|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string             $class
     * @param string             $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsAOf($value, $class, $message = '')
    {
        static::__callStatic('nullOrIsAOf', array($value, $class, $message));
    }
=======
     */
    public static function nullOrIsAOf($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<ExpectedType|class-string<ExpectedType>> $value
     *
     * @param iterable<object|string> $value
     * @param string                  $class
     * @param string                  $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsAOf($value, $class, $message = '')
    {
        static::__callStatic('allIsAOf', array($value, $class, $message));
    }
=======
     */
    public static function allIsAOf($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template UnexpectedType of object
     * @psalm-param class-string<UnexpectedType> $class
     *
<<<<<<< HEAD
     * @param object|string|null $value
=======
     * @param null|object|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string             $class
     * @param string             $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsNotA($value, $class, $message = '')
    {
        static::__callStatic('nullOrIsNotA', array($value, $class, $message));
    }
=======
     */
    public static function nullOrIsNotA($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template UnexpectedType of object
     * @psalm-param class-string<UnexpectedType> $class
     *
     * @param iterable<object|string> $value
     * @param string                  $class
     * @param string                  $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsNotA($value, $class, $message = '')
    {
        static::__callStatic('allIsNotA', array($value, $class, $message));
    }
=======
     */
    public static function allIsNotA($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
<<<<<<< HEAD
     * @param object|string|null $value
=======
     * @param null|object|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string[]           $classes
     * @param string             $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsAnyOf($value, $classes, $message = '')
    {
        static::__callStatic('nullOrIsAnyOf', array($value, $classes, $message));
    }
=======
     */
    public static function nullOrIsAnyOf($value, $classes, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param iterable<object|string> $value
     * @param string[]                $classes
     * @param string                  $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsAnyOf($value, $classes, $message = '')
    {
        static::__callStatic('allIsAnyOf', array($value, $classes, $message));
    }
=======
     */
    public static function allIsAnyOf($value, $classes, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert empty $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsEmpty($value, $message = '')
    {
        static::__callStatic('nullOrIsEmpty', array($value, $message));
    }
=======
     */
    public static function nullOrIsEmpty($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<empty> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsEmpty($value, $message = '')
    {
        static::__callStatic('allIsEmpty', array($value, $message));
    }
=======
     */
    public static function allIsEmpty($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotEmpty($value, $message = '')
    {
        static::__callStatic('nullOrNotEmpty', array($value, $message));
    }
=======
     */
    public static function nullOrNotEmpty($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotEmpty($value, $message = '')
    {
        static::__callStatic('allNotEmpty', array($value, $message));
    }
=======
     */
    public static function allNotEmpty($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNull($value, $message = '')
    {
        static::__callStatic('allNull', array($value, $message));
    }
=======
     */
    public static function allNull($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotNull($value, $message = '')
    {
        static::__callStatic('allNotNull', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert true|null $value
=======
     */
    public static function allNotNull($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|true $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrTrue($value, $message = '')
    {
        static::__callStatic('nullOrTrue', array($value, $message));
    }
=======
     */
    public static function nullOrTrue($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<true> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allTrue($value, $message = '')
    {
        static::__callStatic('allTrue', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert false|null $value
=======
     */
    public static function allTrue($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|false $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrFalse($value, $message = '')
    {
        static::__callStatic('nullOrFalse', array($value, $message));
    }
=======
     */
    public static function nullOrFalse($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<false> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allFalse($value, $message = '')
    {
        static::__callStatic('allFalse', array($value, $message));
    }
=======
     */
    public static function allFalse($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotFalse($value, $message = '')
    {
        static::__callStatic('nullOrNotFalse', array($value, $message));
    }
=======
     */
    public static function nullOrNotFalse($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotFalse($value, $message = '')
    {
        static::__callStatic('allNotFalse', array($value, $message));
    }
=======
     */
    public static function allNotFalse($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIp($value, $message = '')
    {
        static::__callStatic('nullOrIp', array($value, $message));
    }
=======
     */
    public static function nullOrIp($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIp($value, $message = '')
    {
        static::__callStatic('allIp', array($value, $message));
    }
=======
     */
    public static function allIp($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIpv4($value, $message = '')
    {
        static::__callStatic('nullOrIpv4', array($value, $message));
    }
=======
     */
    public static function nullOrIpv4($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIpv4($value, $message = '')
    {
        static::__callStatic('allIpv4', array($value, $message));
    }
=======
     */
    public static function allIpv4($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIpv6($value, $message = '')
    {
        static::__callStatic('nullOrIpv6', array($value, $message));
    }
=======
     */
    public static function nullOrIpv6($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIpv6($value, $message = '')
    {
        static::__callStatic('allIpv6', array($value, $message));
    }
=======
     */
    public static function allIpv6($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrEmail($value, $message = '')
    {
        static::__callStatic('nullOrEmail', array($value, $message));
    }
=======
     */
    public static function nullOrEmail($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allEmail($value, $message = '')
    {
        static::__callStatic('allEmail', array($value, $message));
    }

    /**
     * @param array|null $values
     * @param string     $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrUniqueValues($values, $message = '')
    {
        static::__callStatic('nullOrUniqueValues', array($values, $message));
    }
=======
     */
    public static function allEmail($value, $message = '');

    /**
     * @param null|array $values
     * @param string     $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUniqueValues($values, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param iterable<array> $values
     * @param string          $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allUniqueValues($values, $message = '')
    {
        static::__callStatic('allUniqueValues', array($values, $message));
    }
=======
     */
    public static function allUniqueValues($values, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrEq($value, $expect, $message = '')
    {
        static::__callStatic('nullOrEq', array($value, $expect, $message));
    }
=======
     */
    public static function nullOrEq($value, $expect, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allEq($value, $expect, $message = '')
    {
        static::__callStatic('allEq', array($value, $expect, $message));
    }
=======
     */
    public static function allEq($value, $expect, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotEq($value, $expect, $message = '')
    {
        static::__callStatic('nullOrNotEq', array($value, $expect, $message));
    }
=======
     */
    public static function nullOrNotEq($value, $expect, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotEq($value, $expect, $message = '')
    {
        static::__callStatic('allNotEq', array($value, $expect, $message));
    }
=======
     */
    public static function allNotEq($value, $expect, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrSame($value, $expect, $message = '')
    {
        static::__callStatic('nullOrSame', array($value, $expect, $message));
    }
=======
     */
    public static function nullOrSame($value, $expect, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allSame($value, $expect, $message = '')
    {
        static::__callStatic('allSame', array($value, $expect, $message));
    }
=======
     */
    public static function allSame($value, $expect, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotSame($value, $expect, $message = '')
    {
        static::__callStatic('nullOrNotSame', array($value, $expect, $message));
    }
=======
     */
    public static function nullOrNotSame($value, $expect, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotSame($value, $expect, $message = '')
    {
        static::__callStatic('allNotSame', array($value, $expect, $message));
    }
=======
     */
    public static function allNotSame($value, $expect, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrGreaterThan($value, $limit, $message = '')
    {
        static::__callStatic('nullOrGreaterThan', array($value, $limit, $message));
    }
=======
     */
    public static function nullOrGreaterThan($value, $limit, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allGreaterThan($value, $limit, $message = '')
    {
        static::__callStatic('allGreaterThan', array($value, $limit, $message));
    }
=======
     */
    public static function allGreaterThan($value, $limit, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrGreaterThanEq($value, $limit, $message = '')
    {
        static::__callStatic('nullOrGreaterThanEq', array($value, $limit, $message));
    }
=======
     */
    public static function nullOrGreaterThanEq($value, $limit, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allGreaterThanEq($value, $limit, $message = '')
    {
        static::__callStatic('allGreaterThanEq', array($value, $limit, $message));
    }
=======
     */
    public static function allGreaterThanEq($value, $limit, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrLessThan($value, $limit, $message = '')
    {
        static::__callStatic('nullOrLessThan', array($value, $limit, $message));
    }
=======
     */
    public static function nullOrLessThan($value, $limit, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allLessThan($value, $limit, $message = '')
    {
        static::__callStatic('allLessThan', array($value, $limit, $message));
    }
=======
     */
    public static function allLessThan($value, $limit, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrLessThanEq($value, $limit, $message = '')
    {
        static::__callStatic('nullOrLessThanEq', array($value, $limit, $message));
    }
=======
     */
    public static function nullOrLessThanEq($value, $limit, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allLessThanEq($value, $limit, $message = '')
    {
        static::__callStatic('allLessThanEq', array($value, $limit, $message));
    }
=======
     */
    public static function allLessThanEq($value, $limit, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrRange($value, $min, $max, $message = '')
    {
        static::__callStatic('nullOrRange', array($value, $min, $max, $message));
    }
=======
     */
    public static function nullOrRange($value, $min, $max, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allRange($value, $min, $max, $message = '')
    {
        static::__callStatic('allRange', array($value, $min, $max, $message));
    }
=======
     */
    public static function allRange($value, $min, $max, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrOneOf($value, $values, $message = '')
    {
        static::__callStatic('nullOrOneOf', array($value, $values, $message));
    }
=======
     */
    public static function nullOrOneOf($value, $values, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allOneOf($value, $values, $message = '')
    {
        static::__callStatic('allOneOf', array($value, $values, $message));
    }
=======
     */
    public static function allOneOf($value, $values, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrInArray($value, $values, $message = '')
    {
        static::__callStatic('nullOrInArray', array($value, $values, $message));
    }
=======
     */
    public static function nullOrInArray($value, $values, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allInArray($value, $values, $message = '')
    {
        static::__callStatic('allInArray', array($value, $values, $message));
    }
=======
     */
    public static function allInArray($value, $values, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string      $subString
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrContains($value, $subString, $message = '')
    {
        static::__callStatic('nullOrContains', array($value, $subString, $message));
    }
=======
     */
    public static function nullOrContains($value, $subString, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $subString
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allContains($value, $subString, $message = '')
    {
        static::__callStatic('allContains', array($value, $subString, $message));
    }
=======
     */
    public static function allContains($value, $subString, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string      $subString
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotContains($value, $subString, $message = '')
    {
        static::__callStatic('nullOrNotContains', array($value, $subString, $message));
    }
=======
     */
    public static function nullOrNotContains($value, $subString, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $subString
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotContains($value, $subString, $message = '')
    {
        static::__callStatic('allNotContains', array($value, $subString, $message));
    }
=======
     */
    public static function allNotContains($value, $subString, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrNotWhitespaceOnly($value, $message = '')
    {
        static::__callStatic('nullOrNotWhitespaceOnly', array($value, $message));
    }
=======
     * @param null|string $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotWhitespaceOnly($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotWhitespaceOnly($value, $message = '')
    {
        static::__callStatic('allNotWhitespaceOnly', array($value, $message));
    }
=======
     */
    public static function allNotWhitespaceOnly($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string      $prefix
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrStartsWith($value, $prefix, $message = '')
    {
        static::__callStatic('nullOrStartsWith', array($value, $prefix, $message));
    }
=======
     */
    public static function nullOrStartsWith($value, $prefix, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $prefix
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allStartsWith($value, $prefix, $message = '')
    {
        static::__callStatic('allStartsWith', array($value, $prefix, $message));
    }
=======
     */
    public static function allStartsWith($value, $prefix, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string      $prefix
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotStartsWith($value, $prefix, $message = '')
    {
        static::__callStatic('nullOrNotStartsWith', array($value, $prefix, $message));
    }
=======
     */
    public static function nullOrNotStartsWith($value, $prefix, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $prefix
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotStartsWith($value, $prefix, $message = '')
    {
        static::__callStatic('allNotStartsWith', array($value, $prefix, $message));
    }
=======
     */
    public static function allNotStartsWith($value, $prefix, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrStartsWithLetter($value, $message = '')
    {
        static::__callStatic('nullOrStartsWithLetter', array($value, $message));
    }
=======
     */
    public static function nullOrStartsWithLetter($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allStartsWithLetter($value, $message = '')
    {
        static::__callStatic('allStartsWithLetter', array($value, $message));
    }
=======
     */
    public static function allStartsWithLetter($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string      $suffix
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrEndsWith($value, $suffix, $message = '')
    {
        static::__callStatic('nullOrEndsWith', array($value, $suffix, $message));
    }
=======
     */
    public static function nullOrEndsWith($value, $suffix, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $suffix
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allEndsWith($value, $suffix, $message = '')
    {
        static::__callStatic('allEndsWith', array($value, $suffix, $message));
    }
=======
     */
    public static function allEndsWith($value, $suffix, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string      $suffix
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotEndsWith($value, $suffix, $message = '')
    {
        static::__callStatic('nullOrNotEndsWith', array($value, $suffix, $message));
    }
=======
     */
    public static function nullOrNotEndsWith($value, $suffix, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $suffix
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotEndsWith($value, $suffix, $message = '')
    {
        static::__callStatic('allNotEndsWith', array($value, $suffix, $message));
    }
=======
     */
    public static function allNotEndsWith($value, $suffix, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string      $pattern
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrRegex($value, $pattern, $message = '')
    {
        static::__callStatic('nullOrRegex', array($value, $pattern, $message));
    }
=======
     */
    public static function nullOrRegex($value, $pattern, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $pattern
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allRegex($value, $pattern, $message = '')
    {
        static::__callStatic('allRegex', array($value, $pattern, $message));
    }
=======
     */
    public static function allRegex($value, $pattern, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param string      $pattern
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrNotRegex($value, $pattern, $message = '')
    {
        static::__callStatic('nullOrNotRegex', array($value, $pattern, $message));
    }
=======
     */
    public static function nullOrNotRegex($value, $pattern, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $pattern
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allNotRegex($value, $pattern, $message = '')
    {
        static::__callStatic('allNotRegex', array($value, $pattern, $message));
    }
=======
     */
    public static function allNotRegex($value, $pattern, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrUnicodeLetters($value, $message = '')
    {
        static::__callStatic('nullOrUnicodeLetters', array($value, $message));
    }
=======
     */
    public static function nullOrUnicodeLetters($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allUnicodeLetters($value, $message = '')
    {
        static::__callStatic('allUnicodeLetters', array($value, $message));
    }
=======
     */
    public static function allUnicodeLetters($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrAlpha($value, $message = '')
    {
        static::__callStatic('nullOrAlpha', array($value, $message));
    }
=======
     */
    public static function nullOrAlpha($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allAlpha($value, $message = '')
    {
        static::__callStatic('allAlpha', array($value, $message));
    }
=======
     */
    public static function allAlpha($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrDigits($value, $message = '')
    {
        static::__callStatic('nullOrDigits', array($value, $message));
    }
=======
     * @param null|string $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrDigits($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allDigits($value, $message = '')
    {
        static::__callStatic('allDigits', array($value, $message));
    }
=======
     */
    public static function allDigits($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrAlnum($value, $message = '')
    {
        static::__callStatic('nullOrAlnum', array($value, $message));
    }
=======
     * @param null|string $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrAlnum($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allAlnum($value, $message = '')
    {
        static::__callStatic('allAlnum', array($value, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert lowercase-string|null $value
     *
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrLower($value, $message = '')
    {
        static::__callStatic('nullOrLower', array($value, $message));
    }
=======
     */
    public static function allAlnum($value, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|lowercase-string $value
     *
     * @param null|string $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLower($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<lowercase-string> $value
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allLower($value, $message = '')
    {
        static::__callStatic('allLower', array($value, $message));
    }
=======
     */
    public static function allLower($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrUpper($value, $message = '')
    {
        static::__callStatic('nullOrUpper', array($value, $message));
    }
=======
     * @param null|string $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUpper($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allUpper($value, $message = '')
    {
        static::__callStatic('allUpper', array($value, $message));
    }
=======
     */
    public static function allUpper($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param int         $length
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrLength($value, $length, $message = '')
    {
        static::__callStatic('nullOrLength', array($value, $length, $message));
    }
=======
     */
    public static function nullOrLength($value, $length, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param int              $length
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allLength($value, $length, $message = '')
    {
        static::__callStatic('allLength', array($value, $length, $message));
    }
=======
     */
    public static function allLength($value, $length, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param int|float   $min
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrMinLength($value, $min, $message = '')
    {
        static::__callStatic('nullOrMinLength', array($value, $min, $message));
    }
=======
     */
    public static function nullOrMinLength($value, $min, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param int|float        $min
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allMinLength($value, $min, $message = '')
    {
        static::__callStatic('allMinLength', array($value, $min, $message));
    }
=======
     */
    public static function allMinLength($value, $min, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param int|float   $max
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrMaxLength($value, $max, $message = '')
    {
        static::__callStatic('nullOrMaxLength', array($value, $max, $message));
    }
=======
     */
    public static function nullOrMaxLength($value, $max, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param int|float        $max
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allMaxLength($value, $max, $message = '')
    {
        static::__callStatic('allMaxLength', array($value, $max, $message));
    }
=======
     */
    public static function allMaxLength($value, $max, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
=======
     * @param null|string $value
>>>>>>> parent of 31cfa1b1 (p)
     * @param int|float   $min
     * @param int|float   $max
     * @param string      $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrLengthBetween($value, $min, $max, $message = '')
    {
        static::__callStatic('nullOrLengthBetween', array($value, $min, $max, $message));
    }
=======
     */
    public static function nullOrLengthBetween($value, $min, $max, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param int|float        $min
     * @param int|float        $max
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allLengthBetween($value, $min, $max, $message = '')
    {
        static::__callStatic('allLengthBetween', array($value, $min, $max, $message));
    }
=======
     */
    public static function allLengthBetween($value, $min, $max, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrFileExists($value, $message = '')
    {
        static::__callStatic('nullOrFileExists', array($value, $message));
    }
=======
     */
    public static function nullOrFileExists($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allFileExists($value, $message = '')
    {
        static::__callStatic('allFileExists', array($value, $message));
    }
=======
     */
    public static function allFileExists($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrFile($value, $message = '')
    {
        static::__callStatic('nullOrFile', array($value, $message));
    }
=======
     */
    public static function nullOrFile($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allFile($value, $message = '')
    {
        static::__callStatic('allFile', array($value, $message));
    }
=======
     */
    public static function allFile($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrDirectory($value, $message = '')
    {
        static::__callStatic('nullOrDirectory', array($value, $message));
    }
=======
     */
    public static function nullOrDirectory($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allDirectory($value, $message = '')
    {
        static::__callStatic('allDirectory', array($value, $message));
    }

    /**
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrReadable($value, $message = '')
    {
        static::__callStatic('nullOrReadable', array($value, $message));
    }
=======
     */
    public static function allDirectory($value, $message = '');

    /**
     * @param null|string $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrReadable($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allReadable($value, $message = '')
    {
        static::__callStatic('allReadable', array($value, $message));
    }

    /**
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrWritable($value, $message = '')
    {
        static::__callStatic('nullOrWritable', array($value, $message));
    }
=======
     */
    public static function allReadable($value, $message = '');

    /**
     * @param null|string $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrWritable($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allWritable($value, $message = '')
    {
        static::__callStatic('allWritable', array($value, $message));
    }

    /**
     * @psalm-assert class-string|null $value
=======
     */
    public static function allWritable($value, $message = '');

    /**
     * @psalm-assert null|class-string $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrClassExists($value, $message = '')
    {
        static::__callStatic('nullOrClassExists', array($value, $message));
    }
=======
     */
    public static function nullOrClassExists($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-assert iterable<class-string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allClassExists($value, $message = '')
    {
        static::__callStatic('allClassExists', array($value, $message));
    }
=======
     */
    public static function allClassExists($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
<<<<<<< HEAD
     * @psalm-assert class-string<ExpectedType>|ExpectedType|null $value
=======
     * @psalm-assert null|class-string<ExpectedType>|ExpectedType $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrSubclassOf($value, $class, $message = '')
    {
        static::__callStatic('nullOrSubclassOf', array($value, $class, $message));
    }
=======
     */
    public static function nullOrSubclassOf($value, $class, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allSubclassOf($value, $class, $message = '')
    {
        static::__callStatic('allSubclassOf', array($value, $class, $message));
    }

    /**
     * @psalm-assert class-string|null $value
=======
     */
    public static function allSubclassOf($value, $class, $message = '');

    /**
     * @psalm-assert null|class-string $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrInterfaceExists($value, $message = '')
    {
        static::__callStatic('nullOrInterfaceExists', array($value, $message));
    }
=======
     */
    public static function nullOrInterfaceExists($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-assert iterable<class-string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allInterfaceExists($value, $message = '')
    {
        static::__callStatic('allInterfaceExists', array($value, $message));
    }
=======
     */
    public static function allInterfaceExists($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $interface
<<<<<<< HEAD
     * @psalm-assert class-string<ExpectedType>|null $value
=======
     * @psalm-assert null|class-string<ExpectedType> $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrImplementsInterface($value, $interface, $message = '')
    {
        static::__callStatic('nullOrImplementsInterface', array($value, $interface, $message));
    }
=======
     */
    public static function nullOrImplementsInterface($value, $interface, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $interface
     * @psalm-assert iterable<class-string<ExpectedType>> $value
     *
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allImplementsInterface($value, $interface, $message = '')
    {
        static::__callStatic('allImplementsInterface', array($value, $interface, $message));
    }

    /**
     * @psalm-pure
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
=======
     */
    public static function allImplementsInterface($value, $interface, $message = '');

    /**
     * @psalm-pure
     * @psalm-param null|class-string|object $classOrObject
     *
     * @param null|string|object $classOrObject
>>>>>>> parent of 31cfa1b1 (p)
     * @param mixed              $property
     * @param string             $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrPropertyExists($classOrObject, $property, $message = '')
    {
        static::__callStatic('nullOrPropertyExists', array($classOrObject, $property, $message));
    }
=======
     */
    public static function nullOrPropertyExists($classOrObject, $property, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $property
     * @param string                  $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allPropertyExists($classOrObject, $property, $message = '')
    {
        static::__callStatic('allPropertyExists', array($classOrObject, $property, $message));
    }

    /**
     * @psalm-pure
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
=======
     */
    public static function allPropertyExists($classOrObject, $property, $message = '');

    /**
     * @psalm-pure
     * @psalm-param null|class-string|object $classOrObject
     *
     * @param null|string|object $classOrObject
>>>>>>> parent of 31cfa1b1 (p)
     * @param mixed              $property
     * @param string             $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrPropertyNotExists($classOrObject, $property, $message = '')
    {
        static::__callStatic('nullOrPropertyNotExists', array($classOrObject, $property, $message));
    }
=======
     */
    public static function nullOrPropertyNotExists($classOrObject, $property, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $property
     * @param string                  $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allPropertyNotExists($classOrObject, $property, $message = '')
    {
        static::__callStatic('allPropertyNotExists', array($classOrObject, $property, $message));
    }

    /**
     * @psalm-pure
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
=======
     */
    public static function allPropertyNotExists($classOrObject, $property, $message = '');

    /**
     * @psalm-pure
     * @psalm-param null|class-string|object $classOrObject
     *
     * @param null|string|object $classOrObject
>>>>>>> parent of 31cfa1b1 (p)
     * @param mixed              $method
     * @param string             $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrMethodExists($classOrObject, $method, $message = '')
    {
        static::__callStatic('nullOrMethodExists', array($classOrObject, $method, $message));
    }
=======
     */
    public static function nullOrMethodExists($classOrObject, $method, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $method
     * @param string                  $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allMethodExists($classOrObject, $method, $message = '')
    {
        static::__callStatic('allMethodExists', array($classOrObject, $method, $message));
    }

    /**
     * @psalm-pure
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
=======
     */
    public static function allMethodExists($classOrObject, $method, $message = '');

    /**
     * @psalm-pure
     * @psalm-param null|class-string|object $classOrObject
     *
     * @param null|string|object $classOrObject
>>>>>>> parent of 31cfa1b1 (p)
     * @param mixed              $method
     * @param string             $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrMethodNotExists($classOrObject, $method, $message = '')
    {
        static::__callStatic('nullOrMethodNotExists', array($classOrObject, $method, $message));
    }
=======
     */
    public static function nullOrMethodNotExists($classOrObject, $method, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $method
     * @param string                  $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allMethodNotExists($classOrObject, $method, $message = '')
    {
        static::__callStatic('allMethodNotExists', array($classOrObject, $method, $message));
    }
=======
     */
    public static function allMethodNotExists($classOrObject, $method, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param array|null $array
=======
     * @param null|array $array
>>>>>>> parent of 31cfa1b1 (p)
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrKeyExists($array, $key, $message = '')
    {
        static::__callStatic('nullOrKeyExists', array($array, $key, $message));
    }
=======
     */
    public static function nullOrKeyExists($array, $key, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<array> $array
     * @param string|int      $key
     * @param string          $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allKeyExists($array, $key, $message = '')
    {
        static::__callStatic('allKeyExists', array($array, $key, $message));
    }
=======
     */
    public static function allKeyExists($array, $key, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param array|null $array
=======
     * @param null|array $array
>>>>>>> parent of 31cfa1b1 (p)
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrKeyNotExists($array, $key, $message = '')
    {
        static::__callStatic('nullOrKeyNotExists', array($array, $key, $message));
    }
=======
     */
    public static function nullOrKeyNotExists($array, $key, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<array> $array
     * @param string|int      $key
     * @param string          $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allKeyNotExists($array, $key, $message = '')
    {
        static::__callStatic('allKeyNotExists', array($array, $key, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert array-key|null $value
=======
     */
    public static function allKeyNotExists($array, $key, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|array-key $value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrValidArrayKey($value, $message = '')
    {
        static::__callStatic('nullOrValidArrayKey', array($value, $message));
    }
=======
     */
    public static function nullOrValidArrayKey($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<array-key> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allValidArrayKey($value, $message = '')
    {
        static::__callStatic('allValidArrayKey', array($value, $message));
    }

    /**
     * @param Countable|array|null $array
=======
     */
    public static function allValidArrayKey($value, $message = '');

    /**
     * @param null|Countable|array $array
>>>>>>> parent of 31cfa1b1 (p)
     * @param int                  $number
     * @param string               $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrCount($array, $number, $message = '')
    {
        static::__callStatic('nullOrCount', array($array, $number, $message));
    }
=======
     */
    public static function nullOrCount($array, $number, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param iterable<Countable|array> $array
     * @param int                       $number
     * @param string                    $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allCount($array, $number, $message = '')
    {
        static::__callStatic('allCount', array($array, $number, $message));
    }

    /**
     * @param Countable|array|null $array
=======
     */
    public static function allCount($array, $number, $message = '');

    /**
     * @param null|Countable|array $array
>>>>>>> parent of 31cfa1b1 (p)
     * @param int|float            $min
     * @param string               $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrMinCount($array, $min, $message = '')
    {
        static::__callStatic('nullOrMinCount', array($array, $min, $message));
    }
=======
     */
    public static function nullOrMinCount($array, $min, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $min
     * @param string                    $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allMinCount($array, $min, $message = '')
    {
        static::__callStatic('allMinCount', array($array, $min, $message));
    }

    /**
     * @param Countable|array|null $array
=======
     */
    public static function allMinCount($array, $min, $message = '');

    /**
     * @param null|Countable|array $array
>>>>>>> parent of 31cfa1b1 (p)
     * @param int|float            $max
     * @param string               $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrMaxCount($array, $max, $message = '')
    {
        static::__callStatic('nullOrMaxCount', array($array, $max, $message));
    }
=======
     */
    public static function nullOrMaxCount($array, $max, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $max
     * @param string                    $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allMaxCount($array, $max, $message = '')
    {
        static::__callStatic('allMaxCount', array($array, $max, $message));
    }

    /**
     * @param Countable|array|null $array
=======
     */
    public static function allMaxCount($array, $max, $message = '');

    /**
     * @param null|Countable|array $array
>>>>>>> parent of 31cfa1b1 (p)
     * @param int|float            $min
     * @param int|float            $max
     * @param string               $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrCountBetween($array, $min, $max, $message = '')
    {
        static::__callStatic('nullOrCountBetween', array($array, $min, $max, $message));
    }
=======
     */
    public static function nullOrCountBetween($array, $min, $max, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $min
     * @param int|float                 $max
     * @param string                    $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allCountBetween($array, $min, $max, $message = '')
    {
        static::__callStatic('allCountBetween', array($array, $min, $max, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert list|null $array
=======
     */
    public static function allCountBetween($array, $min, $max, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|list $array
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsList($array, $message = '')
    {
        static::__callStatic('nullOrIsList', array($array, $message));
    }
=======
     */
    public static function nullOrIsList($array, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<list> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsList($array, $message = '')
    {
        static::__callStatic('allIsList', array($array, $message));
    }

    /**
     * @psalm-pure
     * @psalm-assert non-empty-list|null $array
=======
     */
    public static function allIsList($array, $message = '');

    /**
     * @psalm-pure
     * @psalm-assert null|non-empty-list $array
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsNonEmptyList($array, $message = '')
    {
        static::__callStatic('nullOrIsNonEmptyList', array($array, $message));
    }
=======
     */
    public static function nullOrIsNonEmptyList($array, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-assert iterable<non-empty-list> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsNonEmptyList($array, $message = '')
    {
        static::__callStatic('allIsNonEmptyList', array($array, $message));
    }
=======
     */
    public static function allIsNonEmptyList($array, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template T
<<<<<<< HEAD
     * @psalm-param mixed|array<T>|null $array
     * @psalm-assert array<string, T>|null $array
=======
     * @psalm-param null|mixed|array<T> $array
     * @psalm-assert null|array<string, T> $array
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsMap($array, $message = '')
    {
        static::__callStatic('nullOrIsMap', array($array, $message));
    }
=======
     */
    public static function nullOrIsMap($array, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>> $array
     * @psalm-assert iterable<array<string, T>> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsMap($array, $message = '')
    {
        static::__callStatic('allIsMap', array($array, $message));
    }
=======
     */
    public static function allIsMap($array, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template T
<<<<<<< HEAD
     * @psalm-param mixed|array<T>|null $array
=======
     * @psalm-param null|mixed|array<T> $array
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrIsNonEmptyMap($array, $message = '')
    {
        static::__callStatic('nullOrIsNonEmptyMap', array($array, $message));
    }
=======
     */
    public static function nullOrIsNonEmptyMap($array, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allIsNonEmptyMap($array, $message = '')
    {
        static::__callStatic('allIsNonEmptyMap', array($array, $message));
    }
=======
     */
    public static function allIsNonEmptyMap($array, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
<<<<<<< HEAD
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public static function nullOrUuid($value, $message = '')
    {
        static::__callStatic('nullOrUuid', array($value, $message));
    }
=======
     * @param null|string $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUuid($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allUuid($value, $message = '')
    {
        static::__callStatic('allUuid', array($value, $message));
    }
=======
     */
    public static function allUuid($value, $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-param class-string<Throwable> $class
     *
<<<<<<< HEAD
     * @param Closure|null $expression
=======
     * @param null|Closure $expression
>>>>>>> parent of 31cfa1b1 (p)
     * @param string       $class
     * @param string       $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function nullOrThrows($expression, $class = 'Exception', $message = '')
    {
        static::__callStatic('nullOrThrows', array($expression, $class, $message));
    }
=======
     */
    public static function nullOrThrows($expression, $class = 'Exception', $message = '');
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @param iterable<Closure> $expression
     * @param string            $class
     * @param string            $message
     *
     * @throws InvalidArgumentException
<<<<<<< HEAD
     *
     * @return void
     */
    public static function allThrows($expression, $class = 'Exception', $message = '')
    {
        static::__callStatic('allThrows', array($expression, $class, $message));
    }
=======
     */
    public static function allThrows($expression, $class = 'Exception', $message = '');
>>>>>>> parent of 31cfa1b1 (p)
}
