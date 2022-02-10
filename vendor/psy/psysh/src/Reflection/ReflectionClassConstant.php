<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Reflection;

/**
 * Somehow the standard reflection library didn't include class constants until 7.1.
 *
 * ReflectionClassConstant corrects that omission.
 */
class ReflectionClassConstant implements \Reflector
{
    public $class;
    public $name;
    private $value;

    /**
     * Construct a ReflectionClassConstant object.
     *
     * @param string|object $class
     * @param string        $name
     */
<<<<<<< HEAD
    public function __construct($class, string $name)
=======
    public function __construct($class, $name)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!$class instanceof \ReflectionClass) {
            $class = new \ReflectionClass($class);
        }

        $this->class = $class;
<<<<<<< HEAD
        $this->name = $name;

        $constants = $class->getConstants();
        if (!\array_key_exists($name, $constants)) {
            throw new \InvalidArgumentException('Unknown constant: '.$name);
=======
        $this->name  = $name;

        $constants = $class->getConstants();
        if (!\array_key_exists($name, $constants)) {
            throw new \InvalidArgumentException('Unknown constant: ' . $name);
>>>>>>> parent of 31cfa1b1 (p)
        }

        $this->value = $constants[$name];
    }

    /**
     * Exports a reflection.
     *
     * @param string|object $class
     * @param string        $name
     * @param bool          $return pass true to return the export, as opposed to emitting it
     *
     * @return string|null
     */
<<<<<<< HEAD
    public static function export($class, string $name, bool $return = false)
=======
    public static function export($class, $name, $return = false)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $refl = new self($class, $name);
        $value = $refl->getValue();

        $str = \sprintf('Constant [ public %s %s ] { %s }', \gettype($value), $refl->getName(), $value);

        if ($return) {
            return $str;
        }

<<<<<<< HEAD
        echo $str."\n";
=======
        echo $str . "\n";
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Gets the declaring class.
     *
     * @return \ReflectionClass
     */
<<<<<<< HEAD
    public function getDeclaringClass(): \ReflectionClass
=======
    public function getDeclaringClass()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $parent = $this->class;

        // Since we don't have real reflection constants, we can't see where
        // it's actually defined. Let's check for a constant that is also
        // available on the parent class which has exactly the same value.
        //
        // While this isn't _technically_ correct, it's prolly close enough.
        do {
<<<<<<< HEAD
            $class = $parent;
=======
            $class  = $parent;
>>>>>>> parent of 31cfa1b1 (p)
            $parent = $class->getParentClass();
        } while ($parent && $parent->hasConstant($this->name) && $parent->getConstant($this->name) === $this->value);

        return $class;
    }

    /**
     * Get the constant's docblock.
     *
     * @return false
     */
<<<<<<< HEAD
    public function getDocComment(): bool
=======
    public function getDocComment()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return false;
    }

    /**
     * Gets the class constant modifiers.
     *
     * Since this is only used for PHP < 7.1, we can just return "public". All
     * the fancier modifiers are only available on PHP versions which have their
     * own ReflectionClassConstant class :)
     *
     * @return int
     */
<<<<<<< HEAD
    public function getModifiers(): int
=======
    public function getModifiers()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return \ReflectionMethod::IS_PUBLIC;
    }

    /**
     * Gets the constant name.
     *
     * @return string
     */
<<<<<<< HEAD
    public function getName(): string
=======
    public function getName()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->name;
    }

    /**
     * Gets the value of the constant.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Checks if class constant is private.
     *
     * @return bool false
     */
<<<<<<< HEAD
    public function isPrivate(): bool
=======
    public function isPrivate()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return false;
    }

    /**
     * Checks if class constant is protected.
     *
     * @return bool false
     */
<<<<<<< HEAD
    public function isProtected(): bool
=======
    public function isProtected()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return false;
    }

    /**
     * Checks if class constant is public.
     *
     * @return bool true
     */
<<<<<<< HEAD
    public function isPublic(): bool
=======
    public function isPublic()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return true;
    }

    /**
     * To string.
     *
     * @return string
     */
<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->getName();
    }

    /**
     * Gets the constant's file name.
     *
     * Currently returns null, because if it returns a file name the signature
     * formatter will barf.
     */
    public function getFileName()
    {
        return;
        // return $this->class->getFileName();
    }

    /**
     * Get the code start line.
     *
     * @throws \RuntimeException
     */
    public function getStartLine()
    {
        throw new \RuntimeException('Not yet implemented because it\'s unclear what I should do here :)');
    }

    /**
     * Get the code end line.
     *
     * @throws \RuntimeException
     */
    public function getEndLine()
    {
        return $this->getStartLine();
    }

    /**
     * Get a ReflectionClassConstant instance.
     *
     * In PHP >= 7.1, this will return a \ReflectionClassConstant from the
     * standard reflection library. For older PHP, it will return this polyfill.
     *
     * @param string|object $class
     * @param string        $name
     *
     * @return ReflectionClassConstant|\ReflectionClassConstant
     */
<<<<<<< HEAD
    public static function create($class, string $name)
=======
    public static function create($class, $name)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (\class_exists(\ReflectionClassConstant::class)) {
            return new \ReflectionClassConstant($class, $name);
        }

        return new self($class, $name);
    }
}
