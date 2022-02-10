<?php

/**
<<<<<<< HEAD
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

=======
 * Thanks to https://github.com/flaushi for his suggestion:
 * https://github.com/doctrine/dbal/issues/2873#issuecomment-534956358
 */
>>>>>>> parent of 31cfa1b1 (p)
namespace Carbon\Doctrine;

class DateTimeDefaultPrecision
{
    private static $precision = 6;

    /**
     * Change the default Doctrine datetime and datetime_immutable precision.
     *
     * @param int $precision
     */
    public static function set(int $precision): void
    {
        self::$precision = $precision;
    }

    /**
     * Get the default Doctrine datetime and datetime_immutable precision.
     *
     * @return int
     */
    public static function get(): int
    {
        return self::$precision;
    }
}
