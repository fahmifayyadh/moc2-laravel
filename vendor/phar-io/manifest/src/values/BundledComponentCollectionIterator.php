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

class BundledComponentCollectionIterator implements \Iterator {
    /** @var BundledComponent[] */
    private $bundledComponents;

    /** @var int */
    private $position = 0;
=======

namespace PharIo\Manifest;

class BundledComponentCollectionIterator implements \Iterator {
    /**
     * @var BundledComponent[]
     */
    private $bundledComponents = [];

    /**
     * @var int
     */
    private $position;
>>>>>>> parent of 31cfa1b1 (p)

    public function __construct(BundledComponentCollection $bundledComponents) {
        $this->bundledComponents = $bundledComponents->getBundledComponents();
    }

<<<<<<< HEAD
    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return $this->position < \count($this->bundledComponents);
    }

    public function key(): int {
        return $this->position;
    }

    public function current(): BundledComponent {
        return $this->bundledComponents[$this->position];
    }

    public function next(): void {
=======
    public function rewind() {
        $this->position = 0;
    }

    /**
     * @return bool
     */
    public function valid() {
        return $this->position < count($this->bundledComponents);
    }

    /**
     * @return int
     */
    public function key() {
        return $this->position;
    }

    /**
     * @return BundledComponent
     */
    public function current() {
        return $this->bundledComponents[$this->position];
    }

    public function next() {
>>>>>>> parent of 31cfa1b1 (p)
        $this->position++;
    }
}
