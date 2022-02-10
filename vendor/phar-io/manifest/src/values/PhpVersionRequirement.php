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
=======

>>>>>>> parent of 31cfa1b1 (p)
namespace PharIo\Manifest;

use PharIo\Version\VersionConstraint;

class PhpVersionRequirement implements Requirement {
<<<<<<< HEAD
    /** @var VersionConstraint */
=======
    /**
     * @var VersionConstraint
     */
>>>>>>> parent of 31cfa1b1 (p)
    private $versionConstraint;

    public function __construct(VersionConstraint $versionConstraint) {
        $this->versionConstraint = $versionConstraint;
    }

<<<<<<< HEAD
    public function getVersionConstraint(): VersionConstraint {
=======
    /**
     * @return VersionConstraint
     */
    public function getVersionConstraint() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->versionConstraint;
    }
}
