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

class CopyrightElement extends ManifestElement {
    public function getAuthorElements(): AuthorElementCollection {
=======

namespace PharIo\Manifest;

class CopyrightElement extends ManifestElement {
    public function getAuthorElements() {
>>>>>>> parent of 31cfa1b1 (p)
        return new AuthorElementCollection(
            $this->getChildrenByName('author')
        );
    }

<<<<<<< HEAD
    public function getLicenseElement(): LicenseElement {
=======
    public function getLicenseElement() {
>>>>>>> parent of 31cfa1b1 (p)
        return new LicenseElement(
            $this->getChildByName('license')
        );
    }
}
