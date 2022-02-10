<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

<<<<<<< HEAD
use function count;
use function explode;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PHPUnit\Util\Test as TestUtil;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DataProviderTestSuite extends TestSuite
{
    /**
     * @var string[]
     */
    private $dependencies = [];

    /**
     * @param string[] $dependencies
     */
    public function setDependencies(array $dependencies): void
    {
        $this->dependencies = $dependencies;

        foreach ($this->tests as $test) {
            if (!$test instanceof TestCase) {
                continue;
            }

            $test->setDependencies($dependencies);
        }
    }

    public function getDependencies(): array
    {
        return $this->dependencies;
    }

    public function hasDependencies(): bool
    {
<<<<<<< HEAD
        return count($this->dependencies) > 0;
    }

    /**
     * Returns the size of the each test created using the data provider(s).
=======
        return \count($this->dependencies) > 0;
    }

    /**
     * Returns the size of the each test created using the data provider(s)
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function getSize(): int
    {
<<<<<<< HEAD
        [$className, $methodName] = explode('::', $this->getName());
=======
        [$className, $methodName] = \explode('::', $this->getName());
>>>>>>> parent of 31cfa1b1 (p)

        return TestUtil::getSize($className, $methodName);
    }
}
