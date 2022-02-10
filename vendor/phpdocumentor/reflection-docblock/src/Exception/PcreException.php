<?php

declare(strict_types=1);

namespace phpDocumentor\Reflection\Exception;

use InvalidArgumentException;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use const PREG_BACKTRACK_LIMIT_ERROR;
use const PREG_BAD_UTF8_ERROR;
use const PREG_BAD_UTF8_OFFSET_ERROR;
use const PREG_INTERNAL_ERROR;
use const PREG_JIT_STACKLIMIT_ERROR;
use const PREG_NO_ERROR;
use const PREG_RECURSION_LIMIT_ERROR;

final class PcreException extends InvalidArgumentException
{
<<<<<<< HEAD
    public static function createFromPhpError(int $errorCode): self
=======
    public static function createFromPhpError(int $errorCode) : self
>>>>>>> parent of 31cfa1b1 (p)
    {
        switch ($errorCode) {
            case PREG_BACKTRACK_LIMIT_ERROR:
                return new self('Backtrack limit error');
<<<<<<< HEAD

            case PREG_RECURSION_LIMIT_ERROR:
                return new self('Recursion limit error');

            case PREG_BAD_UTF8_ERROR:
                return new self('Bad UTF8 error');

            case PREG_BAD_UTF8_OFFSET_ERROR:
                return new self('Bad UTF8 offset error');

            case PREG_JIT_STACKLIMIT_ERROR:
                return new self('Jit stacklimit error');

=======
            case PREG_RECURSION_LIMIT_ERROR:
                return new self('Recursion limit error');
            case PREG_BAD_UTF8_ERROR:
                return new self('Bad UTF8 error');
            case PREG_BAD_UTF8_OFFSET_ERROR:
                return new self('Bad UTF8 offset error');
            case PREG_JIT_STACKLIMIT_ERROR:
                return new self('Jit stacklimit error');
>>>>>>> parent of 31cfa1b1 (p)
            case PREG_NO_ERROR:
            case PREG_INTERNAL_ERROR:
            default:
        }

        return new self('Unknown Pcre error');
    }
}
