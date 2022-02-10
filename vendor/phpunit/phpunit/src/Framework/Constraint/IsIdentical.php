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
use function abs;
use function get_class;
use function is_array;
use function is_float;
use function is_infinite;
use function is_nan;
use function is_object;
use function is_string;
use function sprintf;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PHPUnit\Framework\ExpectationFailedException;
use SebastianBergmann\Comparator\ComparisonFailure;

/**
 * Constraint that asserts that one value is identical to another.
 *
 * Identical check is performed with PHP's === operator, the operator is
 * explained in detail at
 * {@url https://php.net/manual/en/types.comparisons.php}.
 * Two values are identical if they have the same value and are of the same
 * type.
 *
 * The expected value is passed in the constructor.
 */
final class IsIdentical extends Constraint
{
    /**
     * @var float
     */
    private const EPSILON = 0.0000000001;

    /**
     * @var mixed
     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
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
     */
    public function evaluate($other, string $description = '', bool $returnResult = false)
    {
        if (is_float($this->value) && is_float($other) &&
            !is_infinite($this->value) && !is_infinite($other) &&
            !is_nan($this->value) && !is_nan($other)) {
            $success = abs($this->value - $other) < self::EPSILON;
=======
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false)
    {
        if (\is_float($this->value) && \is_float($other) &&
            !\is_infinite($this->value) && !\is_infinite($other) &&
            !\is_nan($this->value) && !\is_nan($other)) {
            $success = \abs($this->value - $other) < self::EPSILON;
>>>>>>> parent of 31cfa1b1 (p)
        } else {
            $success = $this->value === $other;
        }

        if ($returnResult) {
            return $success;
        }

        if (!$success) {
            $f = null;

            // if both values are strings, make sure a diff is generated
<<<<<<< HEAD
            if (is_string($this->value) && is_string($other)) {
                $f = new ComparisonFailure(
                    $this->value,
                    $other,
                    sprintf("'%s'", $this->value),
                    sprintf("'%s'", $other)
=======
            if (\is_string($this->value) && \is_string($other)) {
                $f = new ComparisonFailure(
                    $this->value,
                    $other,
                    \sprintf("'%s'", $this->value),
                    \sprintf("'%s'", $other)
>>>>>>> parent of 31cfa1b1 (p)
                );
            }

            // if both values are array, make sure a diff is generated
<<<<<<< HEAD
            if (is_array($this->value) && is_array($other)) {
=======
            if (\is_array($this->value) && \is_array($other)) {
>>>>>>> parent of 31cfa1b1 (p)
                $f = new ComparisonFailure(
                    $this->value,
                    $other,
                    $this->exporter()->export($this->value),
                    $this->exporter()->export($other)
                );
            }

            $this->fail($other, $description, $f);
        }
    }

    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString(): string
    {
<<<<<<< HEAD
        if (is_object($this->value)) {
            return 'is identical to an object of class "' .
                get_class($this->value) . '"';
=======
        if (\is_object($this->value)) {
            return 'is identical to an object of class "' .
                \get_class($this->value) . '"';
>>>>>>> parent of 31cfa1b1 (p)
        }

        return 'is identical to ' . $this->exporter()->export($this->value);
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
        if (is_object($this->value) && is_object($other)) {
            return 'two variables reference the same object';
        }

        if (is_string($this->value) && is_string($other)) {
            return 'two strings are identical';
        }

        if (is_array($this->value) && is_array($other)) {
=======
        if (\is_object($this->value) && \is_object($other)) {
            return 'two variables reference the same object';
        }

        if (\is_string($this->value) && \is_string($other)) {
            return 'two strings are identical';
        }

        if (\is_array($this->value) && \is_array($other)) {
>>>>>>> parent of 31cfa1b1 (p)
            return 'two arrays are identical';
        }

        return parent::failureDescription($other);
    }
}
