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
 * Somehow the standard reflection library doesn't include constants.
 *
 * ReflectionConstant_ corrects that omission.
 *
 * Note: For backwards compatibility reasons, this class is named
 * ReflectionConstant_ rather than ReflectionConstant. It will be renamed in
 * v0.10.0.
 */
class ReflectionConstant_ implements \Reflector
{
    public $name;
    private $value;

    private static $magicConstants = [
        '__LINE__',
        '__FILE__',
        '__DIR__',
        '__FUNCTION__',
        '__CLASS__',
        '__TRAIT__',
        '__METHOD__',
        '__NAMESPACE__',
        '__COMPILER_HALT_OFFSET__',
    ];

    /**
     * Construct a ReflectionConstant_ object.
     *
     * @param string $name
     */
<<<<<<< HEAD
    public function __construct(string $name)
=======
    public function __construct($name)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->name = $name;

        if (!\defined($name) && !self::isMagicConstant($name)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException('Unknown constant: '.$name);
=======
            throw new \InvalidArgumentException('Unknown constant: ' . $name);
>>>>>>> parent of 31cfa1b1 (p)
        }

        if (!self::isMagicConstant($name)) {
            $this->value = @\constant($name);
        }
    }

    /**
     * Exports a reflection.
     *
     * @param string $name
     * @param bool   $return pass true to return the export, as opposed to emitting it
     *
     * @return string|null
     */
<<<<<<< HEAD
    public static function export(string $name, bool $return = false)
=======
    public static function export($name, $return = false)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $refl = new self($name);
        $value = $refl->getValue();

        $str = \sprintf('Constant [ %s %s ] { %s }', \gettype($value), $refl->getName(), $value);

        if ($return) {
            return $str;
        }

<<<<<<< HEAD
        echo $str."\n";
=======
        echo $str . "\n";
>>>>>>> parent of 31cfa1b1 (p)
    }

    public static function isMagicConstant($name)
    {
        return \in_array($name, self::$magicConstants);
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
     * Gets the namespace name.
     *
     * Returns '' when the constant is not namespaced.
     *
     * @return string
     */
<<<<<<< HEAD
    public function getNamespaceName(): string
=======
    public function getNamespaceName()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!$this->inNamespace()) {
            return '';
        }

        return \preg_replace('/\\\\[^\\\\]+$/', '', $this->name);
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
     * Checks if this constant is defined in a namespace.
     *
     * @return bool
     */
<<<<<<< HEAD
    public function inNamespace(): bool
=======
    public function inNamespace()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return \strpos($this->name, '\\') !== false;
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
}
