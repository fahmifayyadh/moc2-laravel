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

class PhpExtensionRequirement implements Requirement {
    /** @var string */
    private $extension;

    public function __construct(string $extension) {
        $this->extension = $extension;
    }

    public function asString(): string {
=======

namespace PharIo\Manifest;

class PhpExtensionRequirement implements Requirement {
    /**
     * @var string
     */
    private $extension;

    /**
     * @param string $extension
     */
    public function __construct($extension) {
        $this->extension = $extension;
    }

    /**
     * @return string
     */
    public function __toString() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->extension;
    }
}
