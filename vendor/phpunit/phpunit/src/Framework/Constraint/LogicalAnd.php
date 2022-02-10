<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\Constraint;

<<<<<<< HEAD
use function array_values;
use function count;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PHPUnit\Framework\ExpectationFailedException;

/**
 * Logical AND.
 */
final class LogicalAnd extends Constraint
{
    /**
     * @var Constraint[]
     */
    private $constraints = [];

    public static function fromConstraints(Constraint ...$constraints): self
    {
        $constraint = new self;

<<<<<<< HEAD
        $constraint->constraints = array_values($constraints);
=======
        $constraint->constraints = \array_values($constraints);
>>>>>>> parent of 31cfa1b1 (p)

        return $constraint;
    }

    /**
     * @param Constraint[] $constraints
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public function setConstraints(array $constraints): void
    {
        $this->constraints = [];

        foreach ($constraints as $constraint) {
            if (!($constraint instanceof Constraint)) {
                throw new \PHPUnit\Framework\Exception(
                    'All parameters to ' . __CLASS__ .
                    ' must be a constraint object.'
                );
            }

            $this->constraints[] = $constraint;
        }
    }

    /**
<<<<<<< HEAD
     * Evaluates the constraint for parameter $other.
=======
     * Evaluates the constraint for parameter $other
>>>>>>> parent of 31cfa1b1 (p)
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
<<<<<<< HEAD
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws ExpectationFailedException
=======
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function evaluate($other, string $description = '', bool $returnResult = false)
    {
        $success = true;

        foreach ($this->constraints as $constraint) {
            if (!$constraint->evaluate($other, $description, true)) {
                $success = false;

                break;
            }
        }

        if ($returnResult) {
            return $success;
        }

        if (!$success) {
            $this->fail($other, $description);
        }
    }

    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
        $text = '';

        foreach ($this->constraints as $key => $constraint) {
            if ($key > 0) {
                $text .= ' and ';
            }

            $text .= $constraint->toString();
        }

        return $text;
    }

    /**
     * Counts the number of constraint elements.
     */
    public function count(): int
    {
        $count = 0;

        foreach ($this->constraints as $constraint) {
<<<<<<< HEAD
            $count += count($constraint);
=======
            $count += \count($constraint);
>>>>>>> parent of 31cfa1b1 (p)
        }

        return $count;
    }
}
