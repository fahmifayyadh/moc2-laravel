<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules\NorwegianBokmal;

use Doctrine\Inflector\Rules\Pattern;
use Doctrine\Inflector\Rules\Substitution;
use Doctrine\Inflector\Rules\Transformation;
use Doctrine\Inflector\Rules\Word;

class Inflectible
{
    /**
     * @return Transformation[]
     */
<<<<<<< HEAD
    public static function getSingular(): iterable
=======
    public static function getSingular() : iterable
>>>>>>> parent of 31cfa1b1 (p)
    {
        yield new Transformation(new Pattern('/re$/i'), 'r');
        yield new Transformation(new Pattern('/er$/i'), '');
    }

    /**
     * @return Transformation[]
     */
<<<<<<< HEAD
    public static function getPlural(): iterable
=======
    public static function getPlural() : iterable
>>>>>>> parent of 31cfa1b1 (p)
    {
        yield new Transformation(new Pattern('/e$/i'), 'er');
        yield new Transformation(new Pattern('/r$/i'), 're');
        yield new Transformation(new Pattern('/$/'), 'er');
    }

    /**
     * @return Substitution[]
     */
<<<<<<< HEAD
    public static function getIrregular(): iterable
=======
    public static function getIrregular() : iterable
>>>>>>> parent of 31cfa1b1 (p)
    {
        yield new Substitution(new Word('konto'), new Word('konti'));
    }
}
