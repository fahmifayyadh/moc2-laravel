<<<<<<< HEAD
<?php declare(strict_types = 1);
=======
<?php
>>>>>>> parent of 31cfa1b1 (p)
/*
 * This file is part of PharIo\Manifest.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
<<<<<<< HEAD
namespace PharIo\Manifest;

class BundledComponentCollection implements \Countable, \IteratorAggregate {
    /** @var BundledComponent[] */
    private $bundledComponents = [];

    public function add(BundledComponent $bundledComponent): void {
=======

namespace PharIo\Manifest;

class BundledComponentCollection implements \Countable, \IteratorAggregate {
    /**
     * @var BundledComponent[]
     */
    private $bundledComponents = [];

    public function add(BundledComponent $bundledComponent) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->bundledComponents[] = $bundledComponent;
    }

    /**
     * @return BundledComponent[]
     */
<<<<<<< HEAD
    public function getBundledComponents(): array {
        return $this->bundledComponents;
    }

    public function count(): int {
        return \count($this->bundledComponents);
    }

    public function getIterator(): BundledComponentCollectionIterator {
=======
    public function getBundledComponents() {
        return $this->bundledComponents;
    }

    /**
     * @return int
     */
    public function count() {
        return count($this->bundledComponents);
    }

    /**
     * @return BundledComponentCollectionIterator
     */
    public function getIterator() {
>>>>>>> parent of 31cfa1b1 (p)
        return new BundledComponentCollectionIterator($this);
    }
}
