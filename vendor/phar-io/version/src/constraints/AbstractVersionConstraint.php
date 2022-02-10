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

abstract class AbstractVersionConstraint implements VersionConstraint {
    /** @var string */
    private $originalValue;

    public function __construct(string $originalValue) {
        $this->originalValue = $originalValue;
    }

    public function asString(): string {
=======

namespace PharIo\Version;

abstract class AbstractVersionConstraint implements VersionConstraint {
    /**
     * @var string
     */
    private $originalValue = '';

    /**
     * @param string $originalValue
     */
    public function __construct($originalValue) {
        $this->originalValue = $originalValue;
    }

    /**
     * @return string
     */
    public function asString() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->originalValue;
    }
}
