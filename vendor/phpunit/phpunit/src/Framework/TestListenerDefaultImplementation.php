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
use Throwable;

=======
>>>>>>> parent of 31cfa1b1 (p)
/**
 * @deprecated The `TestListener` interface is deprecated
 */
trait TestListenerDefaultImplementation
{
<<<<<<< HEAD
    public function addError(Test $test, Throwable $t, float $time): void
=======
    public function addError(Test $test, \Throwable $t, float $time): void
>>>>>>> parent of 31cfa1b1 (p)
    {
    }

    public function addWarning(Test $test, Warning $e, float $time): void
    {
    }

    public function addFailure(Test $test, AssertionFailedError $e, float $time): void
    {
    }

<<<<<<< HEAD
    public function addIncompleteTest(Test $test, Throwable $t, float $time): void
    {
    }

    public function addRiskyTest(Test $test, Throwable $t, float $time): void
    {
    }

    public function addSkippedTest(Test $test, Throwable $t, float $time): void
=======
    public function addIncompleteTest(Test $test, \Throwable $t, float $time): void
    {
    }

    public function addRiskyTest(Test $test, \Throwable $t, float $time): void
    {
    }

    public function addSkippedTest(Test $test, \Throwable $t, float $time): void
>>>>>>> parent of 31cfa1b1 (p)
    {
    }

    public function startTestSuite(TestSuite $suite): void
    {
    }

    public function endTestSuite(TestSuite $suite): void
    {
    }

    public function startTest(Test $test): void
    {
    }

    public function endTest(Test $test, float $time): void
    {
    }
}
