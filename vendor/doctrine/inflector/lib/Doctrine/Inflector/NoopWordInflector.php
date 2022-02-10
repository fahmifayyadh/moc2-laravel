<?php

declare(strict_types=1);

namespace Doctrine\Inflector;

class NoopWordInflector implements WordInflector
{
<<<<<<< HEAD
    public function inflect(string $word): string
=======
    public function inflect(string $word) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $word;
    }
}
