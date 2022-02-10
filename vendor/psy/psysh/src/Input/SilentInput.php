<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Input;

/**
 * A simple class used internally by PsySH to represent silent input.
 *
 * Silent input is generally used for non-user-generated code, such as the
 * rewritten user code run by sudo command. Silent input isn't echoed before
 * evaluating, and it's not added to the readline history.
 */
class SilentInput
{
    private $inputString;

    /**
     * Constructor.
     *
     * @param string $inputString
     */
<<<<<<< HEAD
    public function __construct(string $inputString)
=======
    public function __construct($inputString)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->inputString = $inputString;
    }

    /**
     * To. String.
     *
     * @return string
     */
<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->inputString;
    }
}
