<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules\Spanish;

use Doctrine\Inflector\Rules\Pattern;

final class Uninflected
{
    /**
     * @return Pattern[]
     */
<<<<<<< HEAD
    public static function getSingular(): iterable
=======
    public static function getSingular() : iterable
>>>>>>> parent of 31cfa1b1 (p)
    {
        yield from self::getDefault();
    }

    /**
     * @return Pattern[]
     */
<<<<<<< HEAD
    public static function getPlural(): iterable
=======
    public static function getPlural() : iterable
>>>>>>> parent of 31cfa1b1 (p)
    {
        yield from self::getDefault();
    }

    /**
     * @return Pattern[]
     */
<<<<<<< HEAD
    private static function getDefault(): iterable
=======
    private static function getDefault() : iterable
>>>>>>> parent of 31cfa1b1 (p)
    {
        yield new Pattern('lunes');
        yield new Pattern('rompecabezas');
        yield new Pattern('crisis');
    }
}
