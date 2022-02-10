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

use Monolog\Formatter\FormatterInterface;
use Monolog\ResettableInterface;

/**
 * Forwards records to multiple handlers
 *
 * @author Lenar Lõhmus <lenar@city.ee>
<<<<<<< HEAD
 *
 * @phpstan-import-type Record from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
class GroupHandler extends Handler implements ProcessableHandlerInterface, ResettableInterface
{
    use ProcessableHandlerTrait;

<<<<<<< HEAD
    /** @var HandlerInterface[] */
    protected $handlers;
    /** @var bool */
=======
    protected $handlers;
>>>>>>> parent of 31cfa1b1 (p)
    protected $bubble;

    /**
     * @param HandlerInterface[] $handlers Array of Handlers.
     * @param bool               $bubble   Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(array $handlers, bool $bubble = true)
    {
        foreach ($handlers as $handler) {
            if (!$handler instanceof HandlerInterface) {
                throw new \InvalidArgumentException('The first argument of the GroupHandler must be an array of HandlerInterface instances.');
            }
        }

        $this->handlers = $handlers;
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
        foreach ($this->handlers as $handler) {
            if ($handler->isHandling($record)) {
                return true;
            }
        }

        return false;
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
        if ($this->processors) {
<<<<<<< HEAD
            /** @var Record $record */
=======
>>>>>>> parent of 31cfa1b1 (p)
            $record = $this->processRecord($record);
        }

        foreach ($this->handlers as $handler) {
            $handler->handle($record);
        }

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
        if ($this->processors) {
            $processed = [];
            foreach ($records as $record) {
                $processed[] = $this->processRecord($record);
            }
<<<<<<< HEAD
            /** @var Record[] $records */
=======
>>>>>>> parent of 31cfa1b1 (p)
            $records = $processed;
        }

        foreach ($this->handlers as $handler) {
            $handler->handleBatch($records);
        }
    }

    public function reset()
    {
        $this->resetProcessors();

        foreach ($this->handlers as $handler) {
            if ($handler instanceof ResettableInterface) {
                $handler->reset();
            }
        }
    }

    public function close(): void
    {
        parent::close();

        foreach ($this->handlers as $handler) {
            $handler->close();
        }
    }

    /**
<<<<<<< HEAD
     * {@inheritDoc}
=======
     * {@inheritdoc}
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function setFormatter(FormatterInterface $formatter): HandlerInterface
    {
        foreach ($this->handlers as $handler) {
<<<<<<< HEAD
            if ($handler instanceof FormattableHandlerInterface) {
                $handler->setFormatter($formatter);
            }
=======
            $handler->setFormatter($formatter);
>>>>>>> parent of 31cfa1b1 (p)
        }

        return $this;
    }
}
