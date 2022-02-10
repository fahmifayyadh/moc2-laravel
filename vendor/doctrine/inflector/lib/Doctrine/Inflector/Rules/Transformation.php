<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules;

use Doctrine\Inflector\WordInflector;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function preg_replace;

final class Transformation implements WordInflector
{
    /** @var Pattern */
    private $pattern;

    /** @var string */
    private $replacement;

    public function __construct(Pattern $pattern, string $replacement)
    {
        $this->pattern     = $pattern;
        $this->replacement = $replacement;
    }

<<<<<<< HEAD
    public function getPattern(): Pattern
=======
    public function getPattern() : Pattern
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->pattern;
    }

<<<<<<< HEAD
    public function getReplacement(): string
=======
    public function getReplacement() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->replacement;
    }

<<<<<<< HEAD
    public function inflect(string $word): string
=======
    public function inflect(string $word) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return (string) preg_replace($this->pattern->getRegex(), $this->replacement, $word);
    }
}
