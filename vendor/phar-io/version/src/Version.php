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

class Version {
    /** @var string */
    private $originalVersionString;

    /** @var VersionNumber */
    private $major;

    /** @var VersionNumber */
    private $minor;

    /** @var VersionNumber */
    private $patch;

    /** @var null|PreReleaseSuffix */
    private $preReleaseSuffix;

    public function __construct(string $versionString) {
        $this->ensureVersionStringIsValid($versionString);
        $this->originalVersionString = $versionString;
    }

    public function getPreReleaseSuffix(): PreReleaseSuffix {
        if ($this->preReleaseSuffix === null) {
            throw new NoPreReleaseSuffixException('No pre-release suffix set');
        }

        return $this->preReleaseSuffix;
    }

    public function getOriginalString(): string {
        return $this->originalVersionString;
    }

    public function getVersionString(): string {
        $str = \sprintf(
            '%d.%d.%d',
            $this->getMajor()->getValue() ?? 0,
            $this->getMinor()->getValue() ?? 0,
            $this->getPatch()->getValue() ?? 0
        );

        if (!$this->hasPreReleaseSuffix()) {
            return $str;
        }

        return $str . '-' . $this->getPreReleaseSuffix()->asString();
    }

    public function hasPreReleaseSuffix(): bool {
        return $this->preReleaseSuffix !== null;
    }

    public function equals(Version $other): bool {
        return $this->getVersionString() === $other->getVersionString();
    }

    public function isGreaterThan(Version $version): bool {
=======

namespace PharIo\Version;

class Version {
    /**
     * @var VersionNumber
     */
    private $major;

    /**
     * @var VersionNumber
     */
    private $minor;

    /**
     * @var VersionNumber
     */
    private $patch;

    /**
     * @var PreReleaseSuffix
     */
    private $preReleaseSuffix;

    /**
     * @var string
     */
    private $versionString = '';

    /**
     * @param string $versionString
     */
    public function __construct($versionString) {
        $this->ensureVersionStringIsValid($versionString);

        $this->versionString = $versionString;
    }

    /**
     * @return PreReleaseSuffix
     */
    public function getPreReleaseSuffix() {
        return $this->preReleaseSuffix;
    }

    /**
     * @return string
     */
    public function getVersionString() {
        return $this->versionString;
    }

    /**
     * @return bool
     */
    public function hasPreReleaseSuffix() {
        return $this->preReleaseSuffix !== null;
    }

    /**
     * @param Version $version
     *
     * @return bool
     */
    public function isGreaterThan(Version $version) {
>>>>>>> parent of 31cfa1b1 (p)
        if ($version->getMajor()->getValue() > $this->getMajor()->getValue()) {
            return false;
        }

        if ($version->getMajor()->getValue() < $this->getMajor()->getValue()) {
            return true;
        }

        if ($version->getMinor()->getValue() > $this->getMinor()->getValue()) {
            return false;
        }

        if ($version->getMinor()->getValue() < $this->getMinor()->getValue()) {
            return true;
        }

        if ($version->getPatch()->getValue() > $this->getPatch()->getValue()) {
            return false;
        }

        if ($version->getPatch()->getValue() < $this->getPatch()->getValue()) {
            return true;
        }

        if (!$version->hasPreReleaseSuffix() && !$this->hasPreReleaseSuffix()) {
            return false;
        }

        if ($version->hasPreReleaseSuffix() && !$this->hasPreReleaseSuffix()) {
            return true;
        }

        if (!$version->hasPreReleaseSuffix() && $this->hasPreReleaseSuffix()) {
            return false;
        }

        return $this->getPreReleaseSuffix()->isGreaterThan($version->getPreReleaseSuffix());
    }

<<<<<<< HEAD
    public function getMajor(): VersionNumber {
        return $this->major;
    }

    public function getMinor(): VersionNumber {
        return $this->minor;
    }

    public function getPatch(): VersionNumber {
=======
    /**
     * @return VersionNumber
     */
    public function getMajor() {
        return $this->major;
    }

    /**
     * @return VersionNumber
     */
    public function getMinor() {
        return $this->minor;
    }

    /**
     * @return VersionNumber
     */
    public function getPatch() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->patch;
    }

    /**
<<<<<<< HEAD
     * @param string[] $matches
     *
     * @throws InvalidPreReleaseSuffixException
     */
    private function parseVersion(array $matches): void {
        $this->major = new VersionNumber((int)$matches['Major']);
        $this->minor = new VersionNumber((int)$matches['Minor']);
        $this->patch = isset($matches['Patch']) ? new VersionNumber((int)$matches['Patch']) : new VersionNumber(0);
=======
     * @param array $matches
     */
    private function parseVersion(array $matches) {
        $this->major = new VersionNumber($matches['Major']);
        $this->minor = new VersionNumber($matches['Minor']);
        $this->patch = isset($matches['Patch']) ? new VersionNumber($matches['Patch']) : new VersionNumber(null);
>>>>>>> parent of 31cfa1b1 (p)

        if (isset($matches['PreReleaseSuffix'])) {
            $this->preReleaseSuffix = new PreReleaseSuffix($matches['PreReleaseSuffix']);
        }
    }

    /**
     * @param string $version
     *
     * @throws InvalidVersionException
     */
<<<<<<< HEAD
    private function ensureVersionStringIsValid($version): void {
        $regex = '/^v?
            (?<Major>(0|(?:[1-9]\d*)))
            \\.
            (?<Minor>(0|(?:[1-9]\d*)))
            (\\.
                (?<Patch>(0|(?:[1-9]\d*)))
            )?
            (?:
                -
                (?<PreReleaseSuffix>(?:(dev|beta|b|rc|alpha|a|patch|p)\.?\d*))
            )?       
        $/xi';

        if (\preg_match($regex, $version, $matches) !== 1) {
            throw new InvalidVersionException(
                \sprintf("Version string '%s' does not follow SemVer semantics", $version)
=======
    private function ensureVersionStringIsValid($version) {
        $regex = '/^v?
            (?<Major>(0|(?:[1-9][0-9]*)))
            \\.
            (?<Minor>(0|(?:[1-9][0-9]*)))
            (\\.
                (?<Patch>(0|(?:[1-9][0-9]*)))
            )?
            (?:
                -
                (?<PreReleaseSuffix>(?:(dev|beta|b|RC|alpha|a|patch|p)\.?\d*))
            )?       
        $/x';

        if (preg_match($regex, $version, $matches) !== 1) {
            throw new InvalidVersionException(
                sprintf("Version string '%s' does not follow SemVer semantics", $version)
>>>>>>> parent of 31cfa1b1 (p)
            );
        }

        $this->parseVersion($matches);
    }
}
