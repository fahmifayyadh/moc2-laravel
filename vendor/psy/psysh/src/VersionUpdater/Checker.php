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

interface Checker
{
<<<<<<< HEAD
    const ALWAYS = 'always';
    const DAILY = 'daily';
    const WEEKLY = 'weekly';
    const MONTHLY = 'monthly';
    const NEVER = 'never';
=======
    const ALWAYS  = 'always';
    const DAILY   = 'daily';
    const WEEKLY  = 'weekly';
    const MONTHLY = 'monthly';
    const NEVER   = 'never';
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @return bool
     */
<<<<<<< HEAD
    public function isLatest(): bool;
=======
    public function isLatest();
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @return string
     */
<<<<<<< HEAD
    public function getLatest(): string;
=======
    public function getLatest();
>>>>>>> parent of 31cfa1b1 (p)
}
