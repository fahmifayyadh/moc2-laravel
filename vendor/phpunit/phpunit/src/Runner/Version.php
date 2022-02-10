<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner;

<<<<<<< HEAD
use function array_slice;
use function dirname;
use function explode;
use function implode;
use function strpos;
=======
>>>>>>> parent of 31cfa1b1 (p)
use SebastianBergmann\Version as VersionId;

final class Version
{
    /**
     * @var string
     */
    private static $pharVersion = '';

    /**
     * @var string
     */
    private static $version = '';

    /**
     * Returns the current version of PHPUnit.
     */
    public static function id(): string
    {
        if (self::$pharVersion !== '') {
            return self::$pharVersion;
        }

        if (self::$version === '') {
<<<<<<< HEAD
            self::$version = (new VersionId('8.5.23', dirname(__DIR__, 2)))->getVersion();
=======
            self::$version = (new VersionId('8.5.8', \dirname(__DIR__, 2)))->getVersion();
>>>>>>> parent of 31cfa1b1 (p)
        }

        return self::$version;
    }

    public static function series(): string
    {
<<<<<<< HEAD
        if (strpos(self::id(), '-')) {
            $version = explode('-', self::id())[0];
=======
        if (\strpos(self::id(), '-')) {
            $version = \explode('-', self::id())[0];
>>>>>>> parent of 31cfa1b1 (p)
        } else {
            $version = self::id();
        }

<<<<<<< HEAD
        return implode('.', array_slice(explode('.', $version), 0, 2));
=======
        return \implode('.', \array_slice(\explode('.', $version), 0, 2));
>>>>>>> parent of 31cfa1b1 (p)
    }

    public static function getVersionString(): string
    {
        return 'PHPUnit ' . self::id() . ' by Sebastian Bergmann and contributors.';
    }

    public static function getReleaseChannel(): string
    {
<<<<<<< HEAD
        if (strpos(self::$pharVersion, '-') !== false) {
            return '-snapshot';
=======
        if (\strpos(self::$pharVersion, '-') !== false) {
            return '-nightly';
>>>>>>> parent of 31cfa1b1 (p)
        }

        return '';
    }
}
