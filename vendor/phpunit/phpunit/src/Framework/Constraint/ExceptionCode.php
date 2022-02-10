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
use function sprintf;
use Throwable;

=======
>>>>>>> parent of 31cfa1b1 (p)
final class ExceptionCode extends Constraint
{
    /**
     * @var int|string
     */
    private $expectedCode;

    /**
     * @param int|string $expected
     */
    public function __construct($expected)
    {
        $this->expectedCode = $expected;
    }

    public function toString(): string
    {
        return 'exception code is ';
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
<<<<<<< HEAD
     * @param Throwable $other
=======
     * @param \Throwable $other
>>>>>>> parent of 31cfa1b1 (p)
     */
    protected function matches($other): bool
    {
        return (string) $other->getCode() === (string) $this->expectedCode;
    }

    /**
<<<<<<< HEAD
     * Returns the description of the failure.
=======
     * Returns the description of the failure
>>>>>>> parent of 31cfa1b1 (p)
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other): string
    {
<<<<<<< HEAD
        return sprintf(
=======
        return \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
            '%s is equal to expected exception code %s',
            $this->exporter()->export($other->getCode()),
            $this->exporter()->export($this->expectedCode)
        );
    }
}
