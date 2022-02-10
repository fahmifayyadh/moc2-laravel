<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules\English;

use Doctrine\Inflector\GenericLanguageInflectorFactory;
use Doctrine\Inflector\Rules\Ruleset;

final class InflectorFactory extends GenericLanguageInflectorFactory
{
<<<<<<< HEAD
    protected function getSingularRuleset(): Ruleset
=======
    protected function getSingularRuleset() : Ruleset
>>>>>>> parent of 31cfa1b1 (p)
    {
        return Rules::getSingularRuleset();
    }

<<<<<<< HEAD
    protected function getPluralRuleset(): Ruleset
=======
    protected function getPluralRuleset() : Ruleset
>>>>>>> parent of 31cfa1b1 (p)
    {
        return Rules::getPluralRuleset();
    }
}
