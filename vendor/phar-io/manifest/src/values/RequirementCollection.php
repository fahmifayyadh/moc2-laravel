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

class RequirementCollection implements \Countable, \IteratorAggregate {
    /** @var Requirement[] */
    private $requirements = [];

    public function add(Requirement $requirement): void {
=======

namespace PharIo\Manifest;

class RequirementCollection implements \Countable, \IteratorAggregate {
    /**
     * @var Requirement[]
     */
    private $requirements = [];

    public function add(Requirement $requirement) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->requirements[] = $requirement;
    }

    /**
     * @return Requirement[]
     */
<<<<<<< HEAD
    public function getRequirements(): array {
        return $this->requirements;
    }

    public function count(): int {
        return \count($this->requirements);
    }

    public function getIterator(): RequirementCollectionIterator {
=======
    public function getRequirements() {
        return $this->requirements;
    }

    /**
     * @return int
     */
    public function count() {
        return count($this->requirements);
    }

    /**
     * @return RequirementCollectionIterator
     */
    public function getIterator() {
>>>>>>> parent of 31cfa1b1 (p)
        return new RequirementCollectionIterator($this);
    }
}
