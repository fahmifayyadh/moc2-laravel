<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules;

use function array_map;
use function implode;
use function preg_match;

class Patterns
{
    /** @var Pattern[] */
    private $patterns;

    /** @var string */
    private $regex;

    public function __construct(Pattern ...$patterns)
    {
        $this->patterns = $patterns;

<<<<<<< HEAD
        $patterns = array_map(static function (Pattern $pattern): string {
=======
        $patterns = array_map(static function (Pattern $pattern) : string {
>>>>>>> parent of 31cfa1b1 (p)
            return $pattern->getPattern();
        }, $this->patterns);

        $this->regex = '/^(?:' . implode('|', $patterns) . ')$/i';
    }

<<<<<<< HEAD
    public function matches(string $word): bool
=======
    public function matches(string $word) : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return preg_match($this->regex, $word, $regs) === 1;
    }
}
