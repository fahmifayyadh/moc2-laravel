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
use Monolog\ResettableInterface;
<<<<<<< HEAD
use Psr\Log\LogLevel;
=======
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Base Handler class providing basic level/bubble support
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
<<<<<<< HEAD
 *
 * @phpstan-import-type Level from \Monolog\Logger
 * @phpstan-import-type LevelName from \Monolog\Logger
 */
abstract class AbstractHandler extends Handler implements ResettableInterface
{
    /**
     * @var int
     * @phpstan-var Level
     */
    protected $level = Logger::DEBUG;
    /** @var bool */
=======
 */
abstract class AbstractHandler extends Handler implements ResettableInterface
{
    protected $level = Logger::DEBUG;
>>>>>>> parent of 31cfa1b1 (p)
    protected $bubble = true;

    /**
     * @param int|string $level  The minimum logging level at which this handler will be triggered
     * @param bool       $bubble Whether the messages that are handled can bubble up the stack or not
<<<<<<< HEAD
     *
     * @phpstan-param Level|LevelName|LogLevel::* $level
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct($level = Logger::DEBUG, bool $bubble = true)
    {
        $this->setLevel($level);
        $this->bubble = $bubble;
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
     * Sets minimum logging level at which this handler will be triggered.
     *
<<<<<<< HEAD
     * @param  Level|LevelName|LogLevel::* $level Level or level name
=======
     * @param  int|string $level Level or level name
>>>>>>> parent of 31cfa1b1 (p)
     * @return self
     */
    public function setLevel($level): self
    {
        $this->level = Logger::toMonologLevel($level);

        return $this;
    }

    /**
     * Gets minimum logging level at which this handler will be triggered.
     *
     * @return int
<<<<<<< HEAD
     *
     * @phpstan-return Level
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Sets the bubbling behavior.
     *
     * @param  bool $bubble true means that this handler allows bubbling.
     *                      false means that bubbling is not permitted.
     * @return self
     */
    public function setBubble(bool $bubble): self
    {
        $this->bubble = $bubble;

        return $this;
    }

    /**
     * Gets the bubbling behavior.
     *
     * @return bool true means that this handler allows bubbling.
     *              false means that bubbling is not permitted.
     */
    public function getBubble(): bool
    {
        return $this->bubble;
    }

<<<<<<< HEAD
    /**
     * {@inheritDoc}
     */
=======
>>>>>>> parent of 31cfa1b1 (p)
    public function reset()
    {
    }
}
