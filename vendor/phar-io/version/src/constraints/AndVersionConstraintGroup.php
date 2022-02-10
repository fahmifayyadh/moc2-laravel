<<<<<<< HEAD
<?php declare(strict_types = 1);
=======
<?php
>>>>>>> parent of 31cfa1b1 (p)
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
<<<<<<< HEAD
namespace PharIo\Version;

class AndVersionConstraintGroup extends AbstractVersionConstraint {
    /** @var VersionConstraint[] */
    private $constraints = [];

    /**
     * @param VersionConstraint[] $constraints
     */
    public function __construct(string $originalValue, array $constraints) {
=======

namespace PharIo\Version;

class AndVersionConstraintGroup extends AbstractVersionConstraint {
    /**
     * @var VersionConstraint[]
     */
    private $constraints = [];

    /**
     * @param string $originalValue
     * @param VersionConstraint[] $constraints
     */
    public function __construct($originalValue, array $constraints) {
>>>>>>> parent of 31cfa1b1 (p)
        parent::__construct($originalValue);

        $this->constraints = $constraints;
    }

<<<<<<< HEAD
    public function complies(Version $version): bool {
=======
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version) {
>>>>>>> parent of 31cfa1b1 (p)
        foreach ($this->constraints as $constraint) {
            if (!$constraint->complies($version)) {
                return false;
            }
        }

        return true;
    }
}
