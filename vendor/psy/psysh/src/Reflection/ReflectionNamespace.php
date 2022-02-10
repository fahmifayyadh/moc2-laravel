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
 * A fake Reflector for namespaces.
 */
class ReflectionNamespace implements \Reflector
{
    private $name;

    /**
     * Construct a ReflectionNamespace object.
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
     * This can't (and shouldn't) do anything :).
     *
     * @throws \RuntimeException
     */
    public static function export($name)
    {
        throw new \RuntimeException('Not yet implemented because it\'s unclear what I should do here :)');
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
}
