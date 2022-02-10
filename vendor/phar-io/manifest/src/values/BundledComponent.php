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

class BundledComponent {
<<<<<<< HEAD
    /** @var string */
    private $name;

    /** @var Version */
    private $version;

    public function __construct(string $name, Version $version) {
=======
    /**
     * @var string
     */
    private $name;

    /**
     * @var Version
     */
    private $version;

    /**
     * @param string  $name
     * @param Version $version
     */
    public function __construct($name, Version $version) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->name    = $name;
        $this->version = $version;
    }

<<<<<<< HEAD
    public function getName(): string {
        return $this->name;
    }

    public function getVersion(): Version {
=======
    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return Version
     */
    public function getVersion() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->version;
    }
}
