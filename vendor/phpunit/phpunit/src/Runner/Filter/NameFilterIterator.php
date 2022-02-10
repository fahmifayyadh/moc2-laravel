<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner\Filter;

<<<<<<< HEAD
use function end;
use function implode;
use function preg_match;
use function sprintf;
use function str_replace;
use Exception;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PHPUnit\Framework\TestSuite;
use PHPUnit\Framework\WarningTestCase;
use PHPUnit\Util\RegularExpression;
use RecursiveFilterIterator;
use RecursiveIterator;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NameFilterIterator extends RecursiveFilterIterator
{
    /**
     * @var string
     */
    private $filter;

    /**
     * @var int
     */
    private $filterMin;

    /**
     * @var int
     */
    private $filterMax;

    /**
<<<<<<< HEAD
     * @throws Exception
=======
     * @throws \Exception
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct(RecursiveIterator $iterator, string $filter)
    {
        parent::__construct($iterator);

        $this->setFilter($filter);
    }

    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function accept(): bool
    {
        $test = $this->getInnerIterator()->current();

        if ($test instanceof TestSuite) {
            return true;
        }

        $tmp = \PHPUnit\Util\Test::describe($test);

        if ($test instanceof WarningTestCase) {
            $name = $test->getMessage();
        } elseif ($tmp[0] !== '') {
<<<<<<< HEAD
            $name = implode('::', $tmp);
=======
            $name = \implode('::', $tmp);
>>>>>>> parent of 31cfa1b1 (p)
        } else {
            $name = $tmp[1];
        }

<<<<<<< HEAD
        $accepted = @preg_match($this->filter, $name, $matches);

        if ($accepted && isset($this->filterMax)) {
            $set      = end($matches);
=======
        $accepted = @\preg_match($this->filter, $name, $matches);

        if ($accepted && isset($this->filterMax)) {
            $set      = \end($matches);
>>>>>>> parent of 31cfa1b1 (p)
            $accepted = $set >= $this->filterMin && $set <= $this->filterMax;
        }

        return (bool) $accepted;
    }

    /**
<<<<<<< HEAD
     * @throws Exception
=======
     * @throws \Exception
>>>>>>> parent of 31cfa1b1 (p)
     */
    private function setFilter(string $filter): void
    {
        if (RegularExpression::safeMatch($filter, '') === false) {
            // Handles:
            //  * testAssertEqualsSucceeds#4
            //  * testAssertEqualsSucceeds#4-8
<<<<<<< HEAD
            if (preg_match('/^(.*?)#(\d+)(?:-(\d+))?$/', $filter, $matches)) {
                if (isset($matches[3]) && $matches[2] < $matches[3]) {
                    $filter = sprintf(
=======
            if (\preg_match('/^(.*?)#(\d+)(?:-(\d+))?$/', $filter, $matches)) {
                if (isset($matches[3]) && $matches[2] < $matches[3]) {
                    $filter = \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
                        '%s.*with data set #(\d+)$',
                        $matches[1]
                    );

                    $this->filterMin = (int) $matches[2];
                    $this->filterMax = (int) $matches[3];
                } else {
<<<<<<< HEAD
                    $filter = sprintf(
=======
                    $filter = \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
                        '%s.*with data set #%s$',
                        $matches[1],
                        $matches[2]
                    );
                }
            } // Handles:
            //  * testDetermineJsonError@JSON_ERROR_NONE
            //  * testDetermineJsonError@JSON.*
<<<<<<< HEAD
            elseif (preg_match('/^(.*?)@(.+)$/', $filter, $matches)) {
                $filter = sprintf(
=======
            elseif (\preg_match('/^(.*?)@(.+)$/', $filter, $matches)) {
                $filter = \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
                    '%s.*with data set "%s"$',
                    $matches[1],
                    $matches[2]
                );
            }

            // Escape delimiters in regular expression. Do NOT use preg_quote,
            // to keep magic characters.
<<<<<<< HEAD
            $filter = sprintf(
                '/%s/i',
                str_replace(
                    '/',
                    '\\/',
                    $filter
                )
            );
=======
            $filter = \sprintf('/%s/i', \str_replace(
                '/',
                '\\/',
                $filter
            ));
>>>>>>> parent of 31cfa1b1 (p)
        }

        $this->filter = $filter;
    }
}
