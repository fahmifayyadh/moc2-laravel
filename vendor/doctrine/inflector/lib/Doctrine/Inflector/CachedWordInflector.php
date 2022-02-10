<?php

declare(strict_types=1);

namespace Doctrine\Inflector;

class CachedWordInflector implements WordInflector
{
    /** @var WordInflector */
    private $wordInflector;

    /** @var string[] */
    private $cache = [];

    public function __construct(WordInflector $wordInflector)
    {
        $this->wordInflector = $wordInflector;
    }

<<<<<<< HEAD
    public function inflect(string $word): string
=======
    public function inflect(string $word) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->cache[$word] ?? $this->cache[$word] = $this->wordInflector->inflect($word);
    }
}
