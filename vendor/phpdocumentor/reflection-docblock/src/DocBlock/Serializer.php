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

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function sprintf;
use function str_repeat;
use function str_replace;
use function strlen;
use function wordwrap;

/**
 * Converts a DocBlock back from an object to a complete DocComment including Asterisks.
 */
class Serializer
{
    /** @var string The string to indent the comment with. */
    protected $indentString = ' ';

    /** @var int The number of times the indent string is repeated. */
    protected $indent = 0;

    /** @var bool Whether to indent the first line with the given indent amount and string. */
    protected $isFirstLineIndented = true;

    /** @var int|null The max length of a line. */
    protected $lineLength;

    /** @var Formatter A custom tag formatter. */
    protected $tagFormatter;
<<<<<<< HEAD
    /** @var string */
    private $lineEnding;
=======
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Create a Serializer instance.
     *
     * @param int       $indent          The number of times the indent string is repeated.
     * @param string    $indentString    The string to indent the comment with.
     * @param bool      $indentFirstLine Whether to indent the first line.
     * @param int|null  $lineLength      The max length of a line or NULL to disable line wrapping.
     * @param Formatter $tagFormatter    A custom tag formatter, defaults to PassthroughFormatter.
<<<<<<< HEAD
     * @param string    $lineEnding      Line ending used in the output, by default \n is used.
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct(
        int $indent = 0,
        string $indentString = ' ',
        bool $indentFirstLine = true,
        ?int $lineLength = null,
<<<<<<< HEAD
        ?Formatter $tagFormatter = null,
        string $lineEnding = "\n"
=======
        ?Formatter $tagFormatter = null
>>>>>>> parent of 31cfa1b1 (p)
    ) {
        $this->indent              = $indent;
        $this->indentString        = $indentString;
        $this->isFirstLineIndented = $indentFirstLine;
        $this->lineLength          = $lineLength;
        $this->tagFormatter        = $tagFormatter ?: new PassthroughFormatter();
<<<<<<< HEAD
        $this->lineEnding = $lineEnding;
=======
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Generate a DocBlock comment.
     *
     * @param DocBlock $docblock The DocBlock to serialize.
     *
     * @return string The serialized doc block.
     */
<<<<<<< HEAD
    public function getDocComment(DocBlock $docblock): string
=======
    public function getDocComment(DocBlock $docblock) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        $indent      = str_repeat($this->indentString, $this->indent);
        $firstIndent = $this->isFirstLineIndented ? $indent : '';
        // 3 === strlen(' * ')
        $wrapLength = $this->lineLength ? $this->lineLength - strlen($indent) - 3 : null;

        $text = $this->removeTrailingSpaces(
            $indent,
            $this->addAsterisksForEachLine(
                $indent,
                $this->getSummaryAndDescriptionTextBlock($docblock, $wrapLength)
            )
        );

        $comment = $firstIndent . "/**\n";
        if ($text) {
            $comment .= $indent . ' * ' . $text . "\n";
            $comment .= $indent . " *\n";
        }

        $comment = $this->addTagBlock($docblock, $wrapLength, $indent, $comment);

<<<<<<< HEAD
        return str_replace("\n", $this->lineEnding, $comment . $indent . ' */');
    }

    private function removeTrailingSpaces(string $indent, string $text): string
=======
        return $comment . $indent . ' */';
    }

    private function removeTrailingSpaces(string $indent, string $text) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return str_replace(
            sprintf("\n%s * \n", $indent),
            sprintf("\n%s *\n", $indent),
            $text
        );
    }

<<<<<<< HEAD
    private function addAsterisksForEachLine(string $indent, string $text): string
=======
    private function addAsterisksForEachLine(string $indent, string $text) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return str_replace(
            "\n",
            sprintf("\n%s * ", $indent),
            $text
        );
    }

<<<<<<< HEAD
    private function getSummaryAndDescriptionTextBlock(DocBlock $docblock, ?int $wrapLength): string
=======
    private function getSummaryAndDescriptionTextBlock(DocBlock $docblock, ?int $wrapLength) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        $text = $docblock->getSummary() . ((string) $docblock->getDescription() ? "\n\n" . $docblock->getDescription()
                : '');
        if ($wrapLength !== null) {
            $text = wordwrap($text, $wrapLength);

            return $text;
        }

        return $text;
    }

<<<<<<< HEAD
    private function addTagBlock(DocBlock $docblock, ?int $wrapLength, string $indent, string $comment): string
=======
    private function addTagBlock(DocBlock $docblock, ?int $wrapLength, string $indent, string $comment) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        foreach ($docblock->getTags() as $tag) {
            $tagText = $this->tagFormatter->format($tag);
            if ($wrapLength !== null) {
                $tagText = wordwrap($tagText, $wrapLength);
            }

            $tagText = str_replace(
                "\n",
                sprintf("\n%s * ", $indent),
                $tagText
            );

            $comment .= sprintf("%s * %s\n", $indent, $tagText);
        }

        return $comment;
    }
}
