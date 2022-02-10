<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

<<<<<<< HEAD
use const PHP_EOL;
use function get_class;
use function sprintf;
use function str_replace;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\PhptTestCase;
use RecursiveIteratorIterator;
=======
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\PhptTestCase;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TextTestListRenderer
{
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function render(TestSuite $suite): string
    {
<<<<<<< HEAD
        $buffer = 'Available test(s):' . PHP_EOL;

        foreach (new RecursiveIteratorIterator($suite->getIterator()) as $test) {
            if ($test instanceof TestCase) {
                $name = sprintf(
                    '%s::%s',
                    get_class($test),
                    str_replace(' with data set ', '', $test->getName())
=======
        $buffer = 'Available test(s):' . \PHP_EOL;

        foreach (new \RecursiveIteratorIterator($suite->getIterator()) as $test) {
            if ($test instanceof TestCase) {
                $name = \sprintf(
                    '%s::%s',
                    \get_class($test),
                    \str_replace(' with data set ', '', $test->getName())
>>>>>>> parent of 31cfa1b1 (p)
                );
            } elseif ($test instanceof PhptTestCase) {
                $name = $test->getName();
            } else {
                continue;
            }

<<<<<<< HEAD
            $buffer .= sprintf(
                ' - %s' . PHP_EOL,
=======
            $buffer .= \sprintf(
                ' - %s' . \PHP_EOL,
>>>>>>> parent of 31cfa1b1 (p)
                $name
            );
        }

        return $buffer;
    }
}
