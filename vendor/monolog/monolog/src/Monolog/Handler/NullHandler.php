<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Logger;
<<<<<<< HEAD
use Psr\Log\LogLevel;
=======
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Blackhole
 *
 * Any record it can handle will be thrown away. This can be used
 * to put on top of an existing stack to override it temporarily.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
<<<<<<< HEAD
 *
 * @phpstan-import-type Level from \Monolog\Logger
 * @phpstan-import-type LevelName from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
class NullHandler extends Handler
{
    /**
     * @var int
     */
    private $level;

    /**
     * @param string|int $level The minimum logging level at which this handler will be triggered
<<<<<<< HEAD
     *
     * @phpstan-param Level|LevelName|LogLevel::* $level
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct($level = Logger::DEBUG)
    {
        $this->level = Logger::toMonologLevel($level);
    }

    /**
<<<<<<< HEAD
     * {@inheritDoc}
=======
     * {@inheritdoc}
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function isHandling(array $record): bool
    {
        return $record['level'] >= $this->level;
    }

    /**
<<<<<<< HEAD
     * {@inheritDoc}
=======
     * {@inheritdoc}
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function handle(array $record): bool
    {
        return $record['level'] >= $this->level;
    }
}
