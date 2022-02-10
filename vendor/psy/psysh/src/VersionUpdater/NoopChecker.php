<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\VersionUpdater;

use Psy\Shell;

/**
 * A version checker stub which always thinks the current verion is up to date.
 */
class NoopChecker implements Checker
{
    /**
     * @return bool
     */
<<<<<<< HEAD
    public function isLatest(): bool
=======
    public function isLatest()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return true;
    }

    /**
     * @return string
     */
<<<<<<< HEAD
    public function getLatest(): string
=======
    public function getLatest()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return Shell::VERSION;
    }
}
