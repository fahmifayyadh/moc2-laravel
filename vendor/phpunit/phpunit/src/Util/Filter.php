<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

<<<<<<< HEAD
use function array_unshift;
use function defined;
use function in_array;
use function is_file;
use function realpath;
use function sprintf;
use function strpos;
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\SyntheticError;
use Throwable;
=======
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\SyntheticError;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Filter
{
    /**
     * @throws Exception
     */
<<<<<<< HEAD
    public static function getFilteredStacktrace(Throwable $t): string
=======
    public static function getFilteredStacktrace(\Throwable $t): string
>>>>>>> parent of 31cfa1b1 (p)
    {
        $filteredStacktrace = '';

        if ($t instanceof SyntheticError) {
            $eTrace = $t->getSyntheticTrace();
            $eFile  = $t->getSyntheticFile();
            $eLine  = $t->getSyntheticLine();
        } elseif ($t instanceof Exception) {
            $eTrace = $t->getSerializableTrace();
            $eFile  = $t->getFile();
            $eLine  = $t->getLine();
        } else {
            if ($t->getPrevious()) {
                $t = $t->getPrevious();
            }

            $eTrace = $t->getTrace();
            $eFile  = $t->getFile();
            $eLine  = $t->getLine();
        }

        if (!self::frameExists($eTrace, $eFile, $eLine)) {
<<<<<<< HEAD
            array_unshift(
=======
            \array_unshift(
>>>>>>> parent of 31cfa1b1 (p)
                $eTrace,
                ['file' => $eFile, 'line' => $eLine]
            );
        }

<<<<<<< HEAD
        $prefix    = defined('__PHPUNIT_PHAR_ROOT__') ? __PHPUNIT_PHAR_ROOT__ : false;
=======
        $prefix    = \defined('__PHPUNIT_PHAR_ROOT__') ? __PHPUNIT_PHAR_ROOT__ : false;
>>>>>>> parent of 31cfa1b1 (p)
        $blacklist = new Blacklist;

        foreach ($eTrace as $frame) {
            if (self::shouldPrintFrame($frame, $prefix, $blacklist)) {
<<<<<<< HEAD
                $filteredStacktrace .= sprintf(
=======
                $filteredStacktrace .= \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
                    "%s:%s\n",
                    $frame['file'],
                    $frame['line'] ?? '?'
                );
            }
        }

        return $filteredStacktrace;
    }

    private static function shouldPrintFrame($frame, $prefix, Blacklist $blacklist): bool
    {
        if (!isset($frame['file'])) {
            return false;
        }

        $file              = $frame['file'];
<<<<<<< HEAD
        $fileIsNotPrefixed = $prefix === false || strpos($file, $prefix) !== 0;

        // @see https://github.com/sebastianbergmann/phpunit/issues/4033
        if (isset($GLOBALS['_SERVER']['SCRIPT_NAME'])) {
            $script = realpath($GLOBALS['_SERVER']['SCRIPT_NAME']);
=======
        $fileIsNotPrefixed = $prefix === false || \strpos($file, $prefix) !== 0;

        // @see https://github.com/sebastianbergmann/phpunit/issues/4033
        if (isset($GLOBALS['_SERVER']['SCRIPT_NAME'])) {
            $script = \realpath($GLOBALS['_SERVER']['SCRIPT_NAME']);
>>>>>>> parent of 31cfa1b1 (p)
        } else {
            $script = '';
        }

<<<<<<< HEAD
        return is_file($file) &&
=======
        return \is_file($file) &&
>>>>>>> parent of 31cfa1b1 (p)
               self::fileIsBlacklisted($file, $blacklist) &&
               $fileIsNotPrefixed &&
               $file !== $script;
    }

    private static function fileIsBlacklisted($file, Blacklist $blacklist): bool
    {
        return (empty($GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST']) ||
<<<<<<< HEAD
                !in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'], true)) &&
=======
                !\in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_BLACKLIST'], true)) &&
>>>>>>> parent of 31cfa1b1 (p)
               !$blacklist->isBlacklisted($file);
    }

    private static function frameExists(array $trace, string $file, int $line): bool
    {
        foreach ($trace as $frame) {
            if (isset($frame['file'], $frame['line']) && $frame['file'] === $file && $frame['line'] === $line) {
                return true;
            }
        }

        return false;
    }
}
