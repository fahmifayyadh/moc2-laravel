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

class ExtElementCollection extends ElementCollection {
    public function current(): ExtElement {
=======

namespace PharIo\Manifest;

class ExtElementCollection extends ElementCollection {
    public function current() {
>>>>>>> parent of 31cfa1b1 (p)
        return new ExtElement(
            $this->getCurrentElement()
        );
    }
<<<<<<< HEAD
=======

>>>>>>> parent of 31cfa1b1 (p)
}
