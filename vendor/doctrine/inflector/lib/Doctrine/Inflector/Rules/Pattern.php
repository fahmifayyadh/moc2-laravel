<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules;

use function preg_match;

final class Pattern
{
    /** @var string */
    private $pattern;

    /** @var string */
    private $regex;

    public function __construct(string $pattern)
    {
        $this->pattern = $pattern;

        if (isset($this->pattern[0]) && $this->pattern[0] === '/') {
            $this->regex = $this->pattern;
        } else {
            $this->regex = '/' . $this->pattern . '/i';
        }
    }

<<<<<<< HEAD
    public function getPattern(): string
=======
    public function getPattern() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->pattern;
    }

<<<<<<< HEAD
    public function getRegex(): string
=======
    public function getRegex() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->regex;
    }

<<<<<<< HEAD
    public function matches(string $word): bool
=======
    public function matches(string $word) : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return preg_match($this->getRegex(), $word) === 1;
    }
}
