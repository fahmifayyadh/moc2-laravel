<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\ErrorHandler;

<<<<<<< HEAD
use Symfony\Component\ErrorHandler\Exception\SilencedErrorContext;

=======
>>>>>>> parent of 31cfa1b1 (p)
/**
 * @internal
 */
class ThrowableUtils
{
<<<<<<< HEAD
    /**
     * @param SilencedErrorContext|\Throwable
     */
    public static function getSeverity($throwable): int
    {
        if ($throwable instanceof \ErrorException || $throwable instanceof SilencedErrorContext) {
=======
    public static function getSeverity(\Throwable $throwable): int
    {
        if ($throwable instanceof \ErrorException) {
>>>>>>> parent of 31cfa1b1 (p)
            return $throwable->getSeverity();
        }

        if ($throwable instanceof \ParseError) {
            return \E_PARSE;
        }

        if ($throwable instanceof \TypeError) {
            return \E_RECOVERABLE_ERROR;
        }

        return \E_ERROR;
    }
}
