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

class PhpElement extends ManifestElement {
    public function getVersion(): string {
        return $this->getAttributeValue('version');
    }

    public function hasExtElements(): bool {
        return $this->hasChild('ext');
    }

    public function getExtElements(): ExtElementCollection {
=======

namespace PharIo\Manifest;

class PhpElement extends ManifestElement {
    public function getVersion() {
        return $this->getAttributeValue('version');
    }

    public function hasExtElements() {
        return $this->hasChild('ext');
    }

    public function getExtElements() {
>>>>>>> parent of 31cfa1b1 (p)
        return new ExtElementCollection(
            $this->getChildrenByName('ext')
        );
    }
}
