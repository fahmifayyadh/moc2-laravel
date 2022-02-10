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

class ComponentElement extends ManifestElement {
    public function getName(): string {
        return $this->getAttributeValue('name');
    }

    public function getVersion(): string {
=======

namespace PharIo\Manifest;

class ComponentElement extends ManifestElement {
    public function getName() {
        return $this->getAttributeValue('name');
    }

    public function getVersion() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->getAttributeValue('version');
    }
}
