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

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function preg_match;

/**
 * Reflection class for a {@}source tag in a Docblock.
 */
final class Source extends BaseTag implements Factory\StaticMethod
{
    /** @var string */
    protected $name = 'source';

    /** @var int The starting line, relative to the structural element's location. */
    private $startingLine;

    /** @var int|null The number of lines, relative to the starting line. NULL means "to the end". */
    private $lineCount;

    /**
     * @param int|string      $startingLine should be a to int convertible value
     * @param int|string|null $lineCount    should be a to int convertible value
     */
    public function __construct($startingLine, $lineCount = null, ?Description $description = null)
    {
        Assert::integerish($startingLine);
        Assert::nullOrIntegerish($lineCount);

        $this->startingLine = (int) $startingLine;
        $this->lineCount    = $lineCount !== null ? (int) $lineCount : null;
        $this->description  = $description;
    }

    public static function create(
        string $body,
        ?DescriptionFactory $descriptionFactory = null,
        ?TypeContext $context = null
<<<<<<< HEAD
    ): self {
=======
    ) : self {
>>>>>>> parent of 31cfa1b1 (p)
        Assert::stringNotEmpty($body);
        Assert::notNull($descriptionFactory);

        $startingLine = 1;
        $lineCount    = null;
        $description  = null;

        // Starting line / Number of lines / Description
        if (preg_match('/^([1-9]\d*)\s*(?:((?1))\s+)?(.*)$/sux', $body, $matches)) {
            $startingLine = (int) $matches[1];
            if (isset($matches[2]) && $matches[2] !== '') {
                $lineCount = (int) $matches[2];
            }

            $description = $matches[3];
        }

<<<<<<< HEAD
        return new static($startingLine, $lineCount, $descriptionFactory->create($description ?? '', $context));
=======
        return new static($startingLine, $lineCount, $descriptionFactory->create($description??'', $context));
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Gets the starting line.
     *
     * @return int The starting line, relative to the structural element's
     *     location.
     */
<<<<<<< HEAD
    public function getStartingLine(): int
=======
    public function getStartingLine() : int
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->startingLine;
    }

    /**
     * Returns the number of lines.
     *
     * @return int|null The number of lines, relative to the starting line. NULL
     *     means "to the end".
     */
<<<<<<< HEAD
    public function getLineCount(): ?int
=======
    public function getLineCount() : ?int
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->lineCount;
    }

<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($this->description) {
            $description = $this->description->render();
        } else {
            $description = '';
        }

        $startingLine = (string) $this->startingLine;

<<<<<<< HEAD
        $lineCount = $this->lineCount !== null ? ' ' . $this->lineCount : '';

        return $startingLine
            . $lineCount
            . ($description !== ''
                ? ' ' . $description
=======
        $lineCount = $this->lineCount !== null ? '' . $this->lineCount : '';

        return $startingLine
            . ($lineCount !== ''
                ? ($startingLine || $startingLine === '0' ? ' ' : '') . $lineCount
                : '')
            . ($description !== ''
                ? ($startingLine || $startingLine === '0' || $lineCount !== '' ? ' ' : '') . $description
>>>>>>> parent of 31cfa1b1 (p)
                : '');
    }
}
