<?php

declare(strict_types=1);

namespace Doctrine\Inflector;

use Doctrine\Inflector\Rules\Ruleset;

interface LanguageInflectorFactory
{
    /**
     * Applies custom rules for singularisation
     *
     * @param bool $reset If true, will unset default inflections for all new rules
     *
     * @return $this
     */
<<<<<<< HEAD
    public function withSingularRules(?Ruleset $singularRules, bool $reset = false): self;
=======
    public function withSingularRules(?Ruleset $singularRules, bool $reset = false) : self;
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Applies custom rules for pluralisation
     *
     * @param bool $reset If true, will unset default inflections for all new rules
     *
     * @return $this
     */
<<<<<<< HEAD
    public function withPluralRules(?Ruleset $pluralRules, bool $reset = false): self;
=======
    public function withPluralRules(?Ruleset $pluralRules, bool $reset = false) : self;
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Builds the inflector instance with all applicable rules
     */
<<<<<<< HEAD
    public function build(): Inflector;
=======
    public function build() : Inflector;
>>>>>>> parent of 31cfa1b1 (p)
}
