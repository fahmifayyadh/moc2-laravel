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

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock\Tags\Formatter;

interface Tag
{
<<<<<<< HEAD
    public function getName(): string;

    /**
     * @return Tag|mixed Class that implements Tag
=======
    public function getName() : string;

    /**
     * @return Tag|mixed Class that implements Tag
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @phpstan-return ?Tag
     */
    public static function create(string $body);

<<<<<<< HEAD
    public function render(?Formatter $formatter = null): string;

    public function __toString(): string;
=======
    public function render(?Formatter $formatter = null) : string;

    public function __toString() : string;
>>>>>>> parent of 31cfa1b1 (p)
}
