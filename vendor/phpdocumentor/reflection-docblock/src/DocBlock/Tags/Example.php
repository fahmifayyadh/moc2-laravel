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

use phpDocumentor\Reflection\DocBlock\Tag;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function array_key_exists;
use function preg_match;
use function rawurlencode;
use function str_replace;
use function strpos;
use function trim;

/**
 * Reflection class for a {@}example tag in a Docblock.
 */
final class Example implements Tag, Factory\StaticMethod
{
    /** @var string Path to a file to use as an example. May also be an absolute URI. */
    private $filePath;

    /**
     * @var bool Whether the file path component represents an URI. This determines how the file portion
     *     appears at {@link getContent()}.
     */
    private $isURI;

    /** @var int */
    private $startingLine;

    /** @var int */
    private $lineCount;

    /** @var string|null */
    private $content;

    public function __construct(
        string $filePath,
        bool $isURI,
        int $startingLine,
        int $lineCount,
        ?string $content
    ) {
        Assert::stringNotEmpty($filePath);
        Assert::greaterThanEq($startingLine, 1);
        Assert::greaterThanEq($lineCount, 0);

        $this->filePath     = $filePath;
        $this->startingLine = $startingLine;
        $this->lineCount    = $lineCount;
        if ($content !== null) {
            $this->content = trim($content);
        }

        $this->isURI = $isURI;
    }

<<<<<<< HEAD
    public function getContent(): string
=======
    public function getContent() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($this->content === null || $this->content === '') {
            $filePath = $this->filePath;
            if ($this->isURI) {
                $filePath = $this->isUriRelative($this->filePath)
                    ? str_replace('%2F', '/', rawurlencode($this->filePath))
                    : $this->filePath;
            }

            return trim($filePath);
        }

        return $this->content;
    }

<<<<<<< HEAD
    public function getDescription(): ?string
=======
    public function getDescription() : ?string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->content;
    }

<<<<<<< HEAD
    public static function create(string $body): ?Tag
=======
    public static function create(string $body) : ?Tag
>>>>>>> parent of 31cfa1b1 (p)
    {
        // File component: File path in quotes or File URI / Source information
        if (!preg_match('/^\s*(?:(\"[^\"]+\")|(\S+))(?:\s+(.*))?$/sux', $body, $matches)) {
            return null;
        }

        $filePath = null;
        $fileUri  = null;
        if ($matches[1] !== '') {
            $filePath = $matches[1];
        } else {
            $fileUri = $matches[2];
        }

        $startingLine = 1;
        $lineCount    = 0;
        $description  = null;

        if (array_key_exists(3, $matches)) {
            $description = $matches[3];

            // Starting line / Number of lines / Description
            if (preg_match('/^([1-9]\d*)(?:\s+((?1))\s*)?(.*)$/sux', $matches[3], $contentMatches)) {
                $startingLine = (int) $contentMatches[1];
                if (isset($contentMatches[2])) {
                    $lineCount = (int) $contentMatches[2];
                }

                if (array_key_exists(3, $contentMatches)) {
                    $description = $contentMatches[3];
                }
            }
        }

        return new static(
            $filePath ?? ($fileUri ?? ''),
            $fileUri !== null,
            $startingLine,
            $lineCount,
            $description
        );
    }

    /**
     * Returns the file path.
     *
     * @return string Path to a file to use as an example.
     *     May also be an absolute URI.
     */
<<<<<<< HEAD
    public function getFilePath(): string
=======
    public function getFilePath() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return trim($this->filePath, '"');
    }

    /**
     * Returns a string representation for this tag.
     */
<<<<<<< HEAD
    public function __toString(): string
    {
        $filePath = $this->filePath;
=======
    public function __toString() : string
    {
        $filePath = (string) $this->filePath;
>>>>>>> parent of 31cfa1b1 (p)
        $isDefaultLine = $this->startingLine === 1 && $this->lineCount === 0;
        $startingLine = !$isDefaultLine ? (string) $this->startingLine : '';
        $lineCount = !$isDefaultLine ? (string) $this->lineCount : '';
        $content = (string) $this->content;

        return $filePath
            . ($startingLine !== ''
                ? ($filePath !== '' ? ' ' : '') . $startingLine
                : '')
            . ($lineCount !== ''
                ? ($filePath !== '' || $startingLine !== '' ? ' ' : '') . $lineCount
                : '')
            . ($content !== ''
                ? ($filePath !== '' || $startingLine !== '' || $lineCount !== '' ? ' ' : '') . $content
                : '');
    }

    /**
     * Returns true if the provided URI is relative or contains a complete scheme (and thus is absolute).
     */
<<<<<<< HEAD
    private function isUriRelative(string $uri): bool
=======
    private function isUriRelative(string $uri) : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return strpos($uri, ':') === false;
    }

<<<<<<< HEAD
    public function getStartingLine(): int
=======
    public function getStartingLine() : int
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->startingLine;
    }

<<<<<<< HEAD
    public function getLineCount(): int
=======
    public function getLineCount() : int
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->lineCount;
    }

<<<<<<< HEAD
    public function getName(): string
=======
    public function getName() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return 'example';
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
