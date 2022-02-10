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

use PharIo\Version\Version;
use PharIo\Version\VersionConstraint;

class Extension extends Type {
<<<<<<< HEAD
    /** @var ApplicationName */
    private $application;

    /** @var VersionConstraint */
    private $versionConstraint;

=======
    /**
     * @var ApplicationName
     */
    private $application;

    /**
     * @var VersionConstraint
     */
    private $versionConstraint;

    /**
     * @param ApplicationName   $application
     * @param VersionConstraint $versionConstraint
     */
>>>>>>> parent of 31cfa1b1 (p)
    public function __construct(ApplicationName $application, VersionConstraint $versionConstraint) {
        $this->application       = $application;
        $this->versionConstraint = $versionConstraint;
    }

<<<<<<< HEAD
    public function getApplicationName(): ApplicationName {
        return $this->application;
    }

    public function getVersionConstraint(): VersionConstraint {
        return $this->versionConstraint;
    }

    public function isExtension(): bool {
        return true;
    }

    public function isExtensionFor(ApplicationName $name): bool {
        return $this->application->isEqual($name);
    }

    public function isCompatibleWith(ApplicationName $name, Version $version): bool {
=======
    /**
     * @return ApplicationName
     */
    public function getApplicationName() {
        return $this->application;
    }

    /**
     * @return VersionConstraint
     */
    public function getVersionConstraint() {
        return $this->versionConstraint;
    }

    /**
     * @return bool
     */
    public function isExtension() {
        return true;
    }

    /**
     * @param ApplicationName $name
     *
     * @return bool
     */
    public function isExtensionFor(ApplicationName $name) {
        return $this->application->isEqual($name);
    }

    /**
     * @param ApplicationName $name
     * @param Version         $version
     *
     * @return bool
     */
    public function isCompatibleWith(ApplicationName $name, Version $version) {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->isExtensionFor($name) && $this->versionConstraint->complies($version);
    }
}
