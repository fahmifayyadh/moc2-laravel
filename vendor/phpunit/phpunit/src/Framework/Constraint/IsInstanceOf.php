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
use ReflectionClass;
use ReflectionException;

=======
>>>>>>> parent of 31cfa1b1 (p)
/**
 * Constraint that asserts that the object it is evaluated for is an instance
 * of a given class.
 *
 * The expected class name is passed in the constructor.
 */
final class IsInstanceOf extends Constraint
{
    /**
     * @var string
     */
    private $className;

    public function __construct(string $className)
    {
        $this->className = $className;
    }

    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf(
=======
        return \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
            'is instance of %s "%s"',
            $this->getType(),
            $this->className
        );
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other): bool
    {
        return $other instanceof $this->className;
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
            '%s is an instance of %s "%s"',
            $this->exporter()->shortenedExport($other),
            $this->getType(),
            $this->className
        );
    }

    private function getType(): string
    {
        try {
<<<<<<< HEAD
            $reflection = new ReflectionClass($this->className);
=======
            $reflection = new \ReflectionClass($this->className);
>>>>>>> parent of 31cfa1b1 (p)

            if ($reflection->isInterface()) {
                return 'interface';
            }
<<<<<<< HEAD
        } catch (ReflectionException $e) {
=======
        } catch (\ReflectionException $e) {
>>>>>>> parent of 31cfa1b1 (p)
        }

        return 'class';
    }
}
