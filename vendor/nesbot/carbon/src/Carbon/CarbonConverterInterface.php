<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace Carbon;

use DateTimeInterface;

interface CarbonConverterInterface
{
    public function convertDate(DateTimeInterface $dateTime, bool $negated = false): CarbonInterface;
}
