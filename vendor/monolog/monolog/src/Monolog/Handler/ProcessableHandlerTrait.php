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

use Monolog\ResettableInterface;
<<<<<<< HEAD
use Monolog\Processor\ProcessorInterface;
=======
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Helper trait for implementing ProcessableInterface
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
<<<<<<< HEAD
 *
 * @phpstan-import-type Record from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
trait ProcessableHandlerTrait
{
    /**
     * @var callable[]
<<<<<<< HEAD
     * @phpstan-var array<ProcessorInterface|callable(Record): Record>
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    protected $processors = [];

    /**
<<<<<<< HEAD
     * {@inheritDoc}
=======
     * {@inheritdoc}
     * @suppress PhanTypeMismatchReturn
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function pushProcessor(callable $callback): HandlerInterface
    {
        array_unshift($this->processors, $callback);

        return $this;
    }

    /**
<<<<<<< HEAD
     * {@inheritDoc}
=======
     * {@inheritdoc}
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function popProcessor(): callable
    {
        if (!$this->processors) {
            throw new \LogicException('You tried to pop from an empty processor stack.');
        }

        return array_shift($this->processors);
    }

    /**
     * Processes a record.
<<<<<<< HEAD
     *
     * @phpstan-param  Record $record
     * @phpstan-return Record
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    protected function processRecord(array $record): array
    {
        foreach ($this->processors as $processor) {
            $record = $processor($record);
        }

        return $record;
    }

    protected function resetProcessors(): void
    {
        foreach ($this->processors as $processor) {
            if ($processor instanceof ResettableInterface) {
                $processor->reset();
            }
        }
    }
}
