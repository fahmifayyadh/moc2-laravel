<?php declare(strict_types=1);
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use SebastianBergmann\Version as VersionId;

final class Version
{
    /**
     * @var string
     */
    private static $version;

    public static function id(): string
    {
        if (self::$version === null) {
<<<<<<< HEAD
            $version       = new VersionId('7.0.15', \dirname(__DIR__));
=======
            $version       = new VersionId('7.0.10', \dirname(__DIR__));
>>>>>>> parent of 31cfa1b1 (p)
            self::$version = $version->getVersion();
        }

        return self::$version;
    }
}
