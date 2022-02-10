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
namespace Carbon\Traits;

use Carbon\CarbonInterval;
use Carbon\Exceptions\InvalidIntervalException;
use DateInterval;

/**
 * Trait to call rounding methods to interval or the interval of a period.
 */
trait IntervalRounding
{
    protected function callRoundMethod(string $method, array $parameters)
    {
        $action = substr($method, 0, 4);

        if ($action !== 'ceil') {
            $action = substr($method, 0, 5);
        }

<<<<<<< HEAD
        if (\in_array($action, ['round', 'floor', 'ceil'])) {
            return $this->{$action.'Unit'}(substr($method, \strlen($action)), ...$parameters);
=======
        if (in_array($action, ['round', 'floor', 'ceil'])) {
            return $this->{$action.'Unit'}(substr($method, strlen($action)), ...$parameters);
>>>>>>> parent of 31cfa1b1 (p)
        }

        return null;
    }

    protected function roundWith($precision, $function)
    {
        $unit = 'second';

        if ($precision instanceof DateInterval) {
            $precision = (string) CarbonInterval::instance($precision);
        }

<<<<<<< HEAD
        if (\is_string($precision) && preg_match('/^\s*(?<precision>\d+)?\s*(?<unit>\w+)(?<other>\W.*)?$/', $precision, $match)) {
=======
        if (is_string($precision) && preg_match('/^\s*(?<precision>\d+)?\s*(?<unit>\w+)(?<other>\W.*)?$/', $precision, $match)) {
>>>>>>> parent of 31cfa1b1 (p)
            if (trim($match['other'] ?? '') !== '') {
                throw new InvalidIntervalException('Rounding is only possible with single unit intervals.');
            }

            $precision = (int) ($match['precision'] ?: 1);
            $unit = $match['unit'];
        }

        return $this->roundUnit($unit, $precision, $function);
    }
}
