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
use function is_finite;

=======
>>>>>>> parent of 31cfa1b1 (p)
/**
 * Constraint that accepts finite.
 */
final class IsFinite extends Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
        return 'is finite';
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
        return is_finite($other);
=======
        return \is_finite($other);
>>>>>>> parent of 31cfa1b1 (p)
    }
}
