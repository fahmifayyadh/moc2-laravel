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

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the type 'string'.
 *
 * @psalm-immutable
 */
<<<<<<< HEAD
class String_ implements Type
=======
final class String_ implements Type
>>>>>>> parent of 31cfa1b1 (p)
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return 'string';
    }
}
