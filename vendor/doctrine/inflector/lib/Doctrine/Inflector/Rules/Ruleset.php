<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules;

class Ruleset
{
    /** @var Transformations */
    private $regular;

    /** @var Patterns */
    private $uninflected;

    /** @var Substitutions */
    private $irregular;

    public function __construct(Transformations $regular, Patterns $uninflected, Substitutions $irregular)
    {
        $this->regular     = $regular;
        $this->uninflected = $uninflected;
        $this->irregular   = $irregular;
    }

<<<<<<< HEAD
    public function getRegular(): Transformations
=======
    public function getRegular() : Transformations
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->regular;
    }

<<<<<<< HEAD
    public function getUninflected(): Patterns
=======
    public function getUninflected() : Patterns
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->uninflected;
    }

<<<<<<< HEAD
    public function getIrregular(): Substitutions
=======
    public function getIrregular() : Substitutions
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->irregular;
    }
}
