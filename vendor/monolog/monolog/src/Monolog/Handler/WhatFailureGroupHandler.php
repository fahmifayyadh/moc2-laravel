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

/**
 * Forwards records to multiple handlers suppressing failures of each handler
 * and continuing through to give every handler a chance to succeed.
 *
 * @author Craig D'Amelio <craig@damelio.ca>
<<<<<<< HEAD
 *
 * @phpstan-import-type Record from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
class WhatFailureGroupHandler extends GroupHandler
{
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
            try {
                $handler->handle($record);
            } catch (\Throwable $e) {
                // What failure?
            }
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
            $processed = array();
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
            try {
                $handler->handleBatch($records);
            } catch (\Throwable $e) {
                // What failure?
            }
        }
    }
}
