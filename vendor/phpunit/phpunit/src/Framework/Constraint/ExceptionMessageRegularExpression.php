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
use Exception;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PHPUnit\Util\RegularExpression as RegularExpressionUtil;

final class ExceptionMessageRegularExpression extends Constraint
{
    /**
     * @var string
     */
    private $expectedMessageRegExp;

    public function __construct(string $expected)
    {
        $this->expectedMessageRegExp = $expected;
    }

    public function toString(): string
    {
        return 'exception message matches ';
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param \PHPUnit\Framework\Exception $other
     *
<<<<<<< HEAD
     * @throws \PHPUnit\Framework\Exception
     * @throws Exception
=======
     * @throws \Exception
     * @throws \PHPUnit\Framework\Exception
>>>>>>> parent of 31cfa1b1 (p)
     */
    protected function matches($other): bool
    {
        $match = RegularExpressionUtil::safeMatch($this->expectedMessageRegExp, $other->getMessage());

        if ($match === false) {
            throw new \PHPUnit\Framework\Exception(
                "Invalid expected exception message regex given: '{$this->expectedMessageRegExp}'"
            );
        }

        return $match === 1;
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
     */
    protected function failureDescription($other): string
    {
<<<<<<< HEAD
        return sprintf(
=======
        return \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
            "exception message '%s' matches '%s'",
            $other->getMessage(),
            $this->expectedMessageRegExp
        );
    }
}
