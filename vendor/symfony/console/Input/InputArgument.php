<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Input;

use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Exception\LogicException;

/**
 * Represents a command line argument.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputArgument
{
<<<<<<< HEAD
    public const REQUIRED = 1;
    public const OPTIONAL = 2;
    public const IS_ARRAY = 4;
=======
    const REQUIRED = 1;
    const OPTIONAL = 2;
    const IS_ARRAY = 4;
>>>>>>> parent of 31cfa1b1 (p)

    private $name;
    private $mode;
    private $default;
    private $description;

    /**
<<<<<<< HEAD
     * @param string                           $name        The argument name
     * @param int|null                         $mode        The argument mode: self::REQUIRED or self::OPTIONAL
     * @param string                           $description A description text
     * @param string|bool|int|float|array|null $default     The default value (for self::OPTIONAL mode only)
=======
     * @param string               $name        The argument name
     * @param int|null             $mode        The argument mode: self::REQUIRED or self::OPTIONAL
     * @param string               $description A description text
     * @param string|string[]|null $default     The default value (for self::OPTIONAL mode only)
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @throws InvalidArgumentException When argument mode is not valid
     */
    public function __construct(string $name, int $mode = null, string $description = '', $default = null)
    {
        if (null === $mode) {
            $mode = self::OPTIONAL;
        } elseif ($mode > 7 || $mode < 1) {
            throw new InvalidArgumentException(sprintf('Argument mode "%s" is not valid.', $mode));
        }

        $this->name = $name;
        $this->mode = $mode;
        $this->description = $description;

        $this->setDefault($default);
    }

    /**
     * Returns the argument name.
     *
     * @return string The argument name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns true if the argument is required.
     *
     * @return bool true if parameter mode is self::REQUIRED, false otherwise
     */
    public function isRequired()
    {
        return self::REQUIRED === (self::REQUIRED & $this->mode);
    }

    /**
     * Returns true if the argument can take multiple values.
     *
     * @return bool true if mode is self::IS_ARRAY, false otherwise
     */
    public function isArray()
    {
        return self::IS_ARRAY === (self::IS_ARRAY & $this->mode);
    }

    /**
     * Sets the default value.
     *
<<<<<<< HEAD
     * @param string|bool|int|float|array|null $default
=======
     * @param string|string[]|null $default The default value
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @throws LogicException When incorrect default value is given
     */
    public function setDefault($default = null)
    {
        if (self::REQUIRED === $this->mode && null !== $default) {
            throw new LogicException('Cannot set a default value except for InputArgument::OPTIONAL mode.');
        }

        if ($this->isArray()) {
            if (null === $default) {
                $default = [];
            } elseif (!\is_array($default)) {
                throw new LogicException('A default value for an array argument must be an array.');
            }
        }

        $this->default = $default;
    }

    /**
     * Returns the default value.
     *
<<<<<<< HEAD
     * @return string|bool|int|float|array|null
=======
     * @return string|string[]|null The default value
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Returns the description text.
     *
     * @return string The description text
     */
    public function getDescription()
    {
        return $this->description;
    }
}
