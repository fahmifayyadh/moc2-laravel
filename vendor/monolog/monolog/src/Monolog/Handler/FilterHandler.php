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
use Monolog\Formatter\FormatterInterface;
<<<<<<< HEAD
use Psr\Log\LogLevel;
=======
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Simple handler wrapper that filters records based on a list of levels
 *
 * It can be configured with an exact list of levels to allow, or a min/max level.
 *
 * @author Hennadiy Verkh
 * @author Jordi Boggiano <j.boggiano@seld.be>
<<<<<<< HEAD
 *
 * @phpstan-import-type Record from \Monolog\Logger
 * @phpstan-import-type Level from \Monolog\Logger
 * @phpstan-import-type LevelName from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
class FilterHandler extends Handler implements ProcessableHandlerInterface, ResettableInterface, FormattableHandlerInterface
{
    use ProcessableHandlerTrait;

    /**
     * Handler or factory callable($record, $this)
     *
<<<<<<< HEAD
     * @var callable|HandlerInterface
     * @phpstan-var callable(?Record, HandlerInterface): HandlerInterface|HandlerInterface
=======
     * @var callable|\Monolog\Handler\HandlerInterface
>>>>>>> parent of 31cfa1b1 (p)
     */
    protected $handler;

    /**
     * Minimum level for logs that are passed to handler
     *
     * @var int[]
<<<<<<< HEAD
     * @phpstan-var array<Level, int>
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    protected $acceptedLevels;

    /**
     * Whether the messages that are handled can bubble up the stack or not
     *
     * @var bool
     */
    protected $bubble;

    /**
<<<<<<< HEAD
     * @psalm-param HandlerInterface|callable(?Record, HandlerInterface): HandlerInterface $handler
=======
     * @psalm-param HandlerInterface|callable(?array, HandlerInterface): HandlerInterface $handler
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @param callable|HandlerInterface $handler        Handler or factory callable($record|null, $filterHandler).
     * @param int|array                 $minLevelOrList A list of levels to accept or a minimum level if maxLevel is provided
     * @param int|string                $maxLevel       Maximum level to accept, only used if $minLevelOrList is not an array
     * @param bool                      $bubble         Whether the messages that are handled can bubble up the stack or not
<<<<<<< HEAD
     *
     * @phpstan-param Level|LevelName|LogLevel::*|array<Level|LevelName|LogLevel::*> $minLevelOrList
     * @phpstan-param Level|LevelName|LogLevel::* $maxLevel
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct($handler, $minLevelOrList = Logger::DEBUG, $maxLevel = Logger::EMERGENCY, bool $bubble = true)
    {
        $this->handler  = $handler;
        $this->bubble   = $bubble;
        $this->setAcceptedLevels($minLevelOrList, $maxLevel);

        if (!$this->handler instanceof HandlerInterface && !is_callable($this->handler)) {
            throw new \RuntimeException("The given handler (".json_encode($this->handler).") is not a callable nor a Monolog\Handler\HandlerInterface object");
        }
    }

<<<<<<< HEAD
    /**
     * @phpstan-return array<int, Level>
     */
=======
>>>>>>> parent of 31cfa1b1 (p)
    public function getAcceptedLevels(): array
    {
        return array_flip($this->acceptedLevels);
    }

    /**
     * @param int|string|array $minLevelOrList A list of levels to accept or a minimum level or level name if maxLevel is provided
     * @param int|string       $maxLevel       Maximum level or level name to accept, only used if $minLevelOrList is not an array
<<<<<<< HEAD
     *
     * @phpstan-param Level|LevelName|LogLevel::*|array<Level|LevelName|LogLevel::*> $minLevelOrList
     * @phpstan-param Level|LevelName|LogLevel::*                                    $maxLevel
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function setAcceptedLevels($minLevelOrList = Logger::DEBUG, $maxLevel = Logger::EMERGENCY): self
    {
        if (is_array($minLevelOrList)) {
            $acceptedLevels = array_map('Monolog\Logger::toMonologLevel', $minLevelOrList);
        } else {
            $minLevelOrList = Logger::toMonologLevel($minLevelOrList);
            $maxLevel = Logger::toMonologLevel($maxLevel);
            $acceptedLevels = array_values(array_filter(Logger::getLevels(), function ($level) use ($minLevelOrList, $maxLevel) {
                return $level >= $minLevelOrList && $level <= $maxLevel;
            }));
        }
        $this->acceptedLevels = array_flip($acceptedLevels);

        return $this;
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
        return isset($this->acceptedLevels[$record['level']]);
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
        if (!$this->isHandling($record)) {
            return false;
        }

        if ($this->processors) {
<<<<<<< HEAD
            /** @var Record $record */
=======
>>>>>>> parent of 31cfa1b1 (p)
            $record = $this->processRecord($record);
        }

        $this->getHandler($record)->handle($record);

        return false === $this->bubble;
    }

    /**
<<<<<<< HEAD
     * {@inheritDoc}
=======
     * {@inheritdoc}
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function handleBatch(array $records): void
    {
        $filtered = [];
        foreach ($records as $record) {
            if ($this->isHandling($record)) {
                $filtered[] = $record;
            }
        }

        if (count($filtered) > 0) {
            $this->getHandler($filtered[count($filtered) - 1])->handleBatch($filtered);
        }
    }

    /**
     * Return the nested handler
     *
     * If the handler was provided as a factory callable, this will trigger the handler's instantiation.
     *
     * @return HandlerInterface
<<<<<<< HEAD
     *
     * @phpstan-param Record $record
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function getHandler(array $record = null)
    {
        if (!$this->handler instanceof HandlerInterface) {
            $this->handler = ($this->handler)($record, $this);
            if (!$this->handler instanceof HandlerInterface) {
                throw new \RuntimeException("The factory callable should return a HandlerInterface");
            }
        }

        return $this->handler;
    }

    /**
<<<<<<< HEAD
     * {@inheritDoc}
     */
    public function setFormatter(FormatterInterface $formatter): HandlerInterface
    {
        $handler = $this->getHandler();
        if ($handler instanceof FormattableHandlerInterface) {
            $handler->setFormatter($formatter);

            return $this;
        }

        throw new \UnexpectedValueException('The nested handler of type '.get_class($handler).' does not support formatters.');
    }

    /**
     * {@inheritDoc}
     */
    public function getFormatter(): FormatterInterface
    {
        $handler = $this->getHandler();
        if ($handler instanceof FormattableHandlerInterface) {
            return $handler->getFormatter();
        }

        throw new \UnexpectedValueException('The nested handler of type '.get_class($handler).' does not support formatters.');
=======
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface $formatter): HandlerInterface
    {
        $this->getHandler()->setFormatter($formatter);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter(): FormatterInterface
    {
        return $this->getHandler()->getFormatter();
>>>>>>> parent of 31cfa1b1 (p)
    }

    public function reset()
    {
        $this->resetProcessors();
<<<<<<< HEAD

        if ($this->getHandler() instanceof ResettableInterface) {
            $this->getHandler()->reset();
        }
=======
>>>>>>> parent of 31cfa1b1 (p)
    }
}
