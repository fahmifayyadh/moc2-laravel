<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlock\Description;

/**
 * Parses a tag definition for a DocBlock.
 */
abstract class BaseTag implements DocBlock\Tag
{
    /** @var string Name of the tag */
    protected $name = '';

    /** @var Description|null Description of the tag. */
    protected $description;

    /**
     * Gets the name of this tag.
     *
     * @return string The name of this tag.
     */
<<<<<<< HEAD
    public function getName(): string
=======
    public function getName() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->name;
    }

<<<<<<< HEAD
    public function getDescription(): ?Description
=======
    public function getDescription() : ?Description
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->description;
    }

<<<<<<< HEAD
    public function render(?Formatter $formatter = null): string
=======
    public function render(?Formatter $formatter = null) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($formatter === null) {
            $formatter = new Formatter\PassthroughFormatter();
        }

        return $formatter->format($this);
    }
}
