<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules;

use Doctrine\Inflector\WordInflector;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function strtolower;
use function strtoupper;
use function substr;

class Substitutions implements WordInflector
{
    /** @var Substitution[] */
    private $substitutions;

    public function __construct(Substitution ...$substitutions)
    {
        foreach ($substitutions as $substitution) {
            $this->substitutions[$substitution->getFrom()->getWord()] = $substitution;
        }
    }

<<<<<<< HEAD
    public function getFlippedSubstitutions(): Substitutions
=======
    public function getFlippedSubstitutions() : Substitutions
>>>>>>> parent of 31cfa1b1 (p)
    {
        $substitutions = [];

        foreach ($this->substitutions as $substitution) {
            $substitutions[] = new Substitution(
                $substitution->getTo(),
                $substitution->getFrom()
            );
        }

        return new Substitutions(...$substitutions);
    }

<<<<<<< HEAD
    public function inflect(string $word): string
=======
    public function inflect(string $word) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        $lowerWord = strtolower($word);

        if (isset($this->substitutions[$lowerWord])) {
            $firstLetterUppercase = $lowerWord[0] !== $word[0];

            $toWord = $this->substitutions[$lowerWord]->getTo()->getWord();

            if ($firstLetterUppercase) {
                return strtoupper($toWord[0]) . substr($toWord, 1);
            }

            return $toWord;
        }

        return $word;
    }
}
