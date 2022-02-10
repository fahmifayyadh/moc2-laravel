<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules;

class Word
{
    /** @var string */
    private $word;

    public function __construct(string $word)
    {
        $this->word = $word;
    }

<<<<<<< HEAD
    public function getWord(): string
=======
    public function getWord() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->word;
    }
}
