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
use function is_readable;
use function sprintf;

=======
>>>>>>> parent of 31cfa1b1 (p)
/**
 * Constraint that checks if the file/dir(name) that it is evaluated for is readable.
 *
 * The file path to check is passed as $other in evaluate().
 */
final class IsReadable extends Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
        return 'is readable';
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other): bool
    {
<<<<<<< HEAD
        return is_readable($other);
    }

    /**
     * Returns the description of the failure.
=======
        return \is_readable($other);
    }

    /**
     * Returns the description of the failure
>>>>>>> parent of 31cfa1b1 (p)
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other): string
    {
<<<<<<< HEAD
        return sprintf(
=======
        return \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
            '"%s" is readable',
            $other
        );
    }
}
