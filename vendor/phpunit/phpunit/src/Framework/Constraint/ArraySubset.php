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
use function array_replace_recursive;
use function is_array;
use function iterator_to_array;
use function var_export;
use ArrayObject;
use PHPUnit\Framework\ExpectationFailedException;
use SebastianBergmann\Comparator\ComparisonFailure;
use Traversable;
=======
use PHPUnit\Framework\ExpectationFailedException;
use SebastianBergmann\Comparator\ComparisonFailure;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Constraint that asserts that the array it is evaluated for has a specified subset.
 *
 * Uses array_replace_recursive() to check if a key value subset is part of the
 * subject array.
 *
 * @codeCoverageIgnore
 *
 * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3494
 */
final class ArraySubset extends Constraint
{
    /**
     * @var iterable
     */
    private $subset;

    /**
     * @var bool
     */
    private $strict;

    public function __construct(iterable $subset, bool $strict = false)
    {
        $this->strict = $strict;
        $this->subset = $subset;
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
        //type cast $other & $this->subset as an array to allow
        //support in standard array functions.
        $other        = $this->toArray($other);
        $this->subset = $this->toArray($this->subset);

<<<<<<< HEAD
        $patched = array_replace_recursive($other, $this->subset);
=======
        $patched = \array_replace_recursive($other, $this->subset);
>>>>>>> parent of 31cfa1b1 (p)

        if ($this->strict) {
            $result = $other === $patched;
        } else {
            $result = $other == $patched;
        }

        if ($returnResult) {
            return $result;
        }

        if (!$result) {
            $f = new ComparisonFailure(
                $patched,
                $other,
<<<<<<< HEAD
                var_export($patched, true),
                var_export($other, true)
=======
                \var_export($patched, true),
                \var_export($other, true)
>>>>>>> parent of 31cfa1b1 (p)
            );

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
        return 'has the subset ' . $this->exporter()->export($this->subset);
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
        return 'an array ' . $this->toString();
    }

    private function toArray(iterable $other): array
    {
<<<<<<< HEAD
        if (is_array($other)) {
            return $other;
        }

        if ($other instanceof ArrayObject) {
            return $other->getArrayCopy();
        }

        if ($other instanceof Traversable) {
            return iterator_to_array($other);
=======
        if (\is_array($other)) {
            return $other;
        }

        if ($other instanceof \ArrayObject) {
            return $other->getArrayCopy();
        }

        if ($other instanceof \Traversable) {
            return \iterator_to_array($other);
>>>>>>> parent of 31cfa1b1 (p)
        }

        // Keep BC even if we know that array would not be the expected one
        return (array) $other;
    }
}
