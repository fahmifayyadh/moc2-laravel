<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Fqsen;
<<<<<<< HEAD
use phpDocumentor\Reflection\PseudoType;
=======
>>>>>>> parent of 31cfa1b1 (p)
use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the type 'string'.
 *
 * @psalm-immutable
 */
<<<<<<< HEAD
final class ClassString extends String_ implements PseudoType
=======
final class ClassString implements Type
>>>>>>> parent of 31cfa1b1 (p)
{
    /** @var Fqsen|null */
    private $fqsen;

    /**
     * Initializes this representation of a class string with the given Fqsen.
     */
    public function __construct(?Fqsen $fqsen = null)
    {
        $this->fqsen = $fqsen;
    }

<<<<<<< HEAD
    public function underlyingType(): Type
    {
        return new String_();
    }

    /**
     * Returns the FQSEN associated with this object.
     */
    public function getFqsen(): ?Fqsen
=======
    /**
     * Returns the FQSEN associated with this object.
     */
    public function getFqsen() : ?Fqsen
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->fqsen;
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($this->fqsen === null) {
            return 'class-string';
        }

        return 'class-string<' . (string) $this->fqsen . '>';
    }
}
