<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Rule;

<<<<<<< HEAD
use function is_string;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\InvalidArgumentException;
use PHPUnit\Framework\MockObject\Invocation as BaseInvocation;
use PHPUnit\Framework\MockObject\MethodNameConstraint;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodName
{
    /**
     * @var Constraint
     */
    private $constraint;

    /**
     * @param Constraint|string $constraint
     *
     * @throws InvalidArgumentException
     */
    public function __construct($constraint)
    {
<<<<<<< HEAD
        if (is_string($constraint)) {
=======
        if (\is_string($constraint)) {
>>>>>>> parent of 31cfa1b1 (p)
            $constraint = new MethodNameConstraint($constraint);
        }

        if (!$constraint instanceof Constraint) {
            throw InvalidArgumentException::create(1, 'PHPUnit\Framework\Constraint\Constraint object or string');
        }

        $this->constraint = $constraint;
    }

    public function toString(): string
    {
        return 'method name ' . $this->constraint->toString();
    }

    /**
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function matches(BaseInvocation $invocation): bool
    {
        return $this->matchesName($invocation->getMethodName());
    }

    public function matchesName(string $methodName): bool
    {
        return $this->constraint->evaluate($methodName, '', true);
    }
}
