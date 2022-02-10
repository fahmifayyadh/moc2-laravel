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
use PHPUnit\Framework\Exception;
use ReflectionClass;
use ReflectionException;
=======
use PHPUnit\Framework\Exception;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Constraint that asserts that the class it is evaluated for has a given
 * static attribute.
 *
 * The attribute name is passed in the constructor.
 */
final class ClassHasStaticAttribute extends ClassHasAttribute
{
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
            'has static attribute "%s"',
            $this->attributeName()
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
        try {
<<<<<<< HEAD
            $class = new ReflectionClass($other);
=======
            $class = new \ReflectionClass($other);
>>>>>>> parent of 31cfa1b1 (p)

            if ($class->hasProperty($this->attributeName())) {
                return $class->getProperty($this->attributeName())->isStatic();
            }
            // @codeCoverageIgnoreStart
<<<<<<< HEAD
        } catch (ReflectionException $e) {
=======
        } catch (\ReflectionException $e) {
>>>>>>> parent of 31cfa1b1 (p)
            throw new Exception(
                $e->getMessage(),
                (int) $e->getCode(),
                $e
            );
        }
        // @codeCoverageIgnoreEnd

        return false;
    }
}
