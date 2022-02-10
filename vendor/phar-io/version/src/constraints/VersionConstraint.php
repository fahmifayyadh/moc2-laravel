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

interface VersionConstraint {
    public function complies(Version $version): bool;

    public function asString(): string;
=======

namespace PharIo\Version;

interface VersionConstraint {
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version);

    /**
     * @return string
     */
    public function asString();

>>>>>>> parent of 31cfa1b1 (p)
}
