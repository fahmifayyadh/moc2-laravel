<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Exception;

/**
 * A "parse error" Exception for Psy.
 */
class ParseErrorException extends \PhpParser\Error implements Exception
{
    /**
     * Constructor!
     *
     * @param string $message (default: "")
     * @param int    $line    (default: -1)
     */
<<<<<<< HEAD
    public function __construct(string $message = '', int $line = -1)
=======
    public function __construct($message = '', $line = -1)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $message = \sprintf('PHP Parse error: %s', $message);
        parent::__construct($message, $line);
    }

    /**
     * Create a ParseErrorException from a PhpParser Error.
     *
     * @param \PhpParser\Error $e
     *
<<<<<<< HEAD
     * @return self
     */
    public static function fromParseError(\PhpParser\Error $e): self
=======
     * @return ParseErrorException
     */
    public static function fromParseError(\PhpParser\Error $e)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return new self($e->getRawMessage(), $e->getStartLine());
    }
}
