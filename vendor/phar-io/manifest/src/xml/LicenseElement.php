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

class LicenseElement extends ManifestElement {
    public function getType(): string {
        return $this->getAttributeValue('type');
    }

    public function getUrl(): string {
=======

namespace PharIo\Manifest;

class LicenseElement extends ManifestElement {
    public function getType() {
        return $this->getAttributeValue('type');
    }

    public function getUrl() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->getAttributeValue('url');
    }
}
