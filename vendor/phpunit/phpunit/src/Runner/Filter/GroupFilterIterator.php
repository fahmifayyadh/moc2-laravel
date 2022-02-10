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
use function array_map;
use function array_merge;
use function in_array;
use function spl_object_hash;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PHPUnit\Framework\TestSuite;
use RecursiveFilterIterator;
use RecursiveIterator;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class GroupFilterIterator extends RecursiveFilterIterator
{
    /**
     * @var string[]
     */
    protected $groupTests = [];

    public function __construct(RecursiveIterator $iterator, array $groups, TestSuite $suite)
    {
        parent::__construct($iterator);

        foreach ($suite->getGroupDetails() as $group => $tests) {
<<<<<<< HEAD
            if (in_array((string) $group, $groups, true)) {
                $testHashes = array_map(
=======
            if (\in_array((string) $group, $groups, true)) {
                $testHashes = \array_map(
>>>>>>> parent of 31cfa1b1 (p)
                    'spl_object_hash',
                    $tests
                );

<<<<<<< HEAD
                $this->groupTests = array_merge($this->groupTests, $testHashes);
=======
                $this->groupTests = \array_merge($this->groupTests, $testHashes);
>>>>>>> parent of 31cfa1b1 (p)
            }
        }
    }

    public function accept(): bool
    {
        $test = $this->getInnerIterator()->current();

        if ($test instanceof TestSuite) {
            return true;
        }

<<<<<<< HEAD
        return $this->doAccept(spl_object_hash($test));
=======
        return $this->doAccept(\spl_object_hash($test));
>>>>>>> parent of 31cfa1b1 (p)
    }

    abstract protected function doAccept(string $hash);
}
