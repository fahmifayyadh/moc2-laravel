<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules\Turkish;

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
        yield new Transformation(new Pattern('/l[ae]r$/i'), '');
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
        yield new Transformation(new Pattern('/([eöiü][^aoıueöiü]{0,6})$/u'), '\1ler');
        yield new Transformation(new Pattern('/([aoıu][^aoıueöiü]{0,6})$/u'), '\1lar');
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
        yield new Substitution(new Word('ben'), new Word('biz'));
        yield new Substitution(new Word('sen'), new Word('siz'));
        yield new Substitution(new Word('o'), new Word('onlar'));
    }
}
