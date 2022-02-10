<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Processor;

/**
 * An optional interface to allow labelling Monolog processors.
 *
 * @author Nicolas Grekas <p@tchwork.com>
<<<<<<< HEAD
 *
 * @phpstan-import-type Record from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
interface ProcessorInterface
{
    /**
     * @return array The processed record
<<<<<<< HEAD
     *
     * @phpstan-param  Record $record
     * @phpstan-return Record
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __invoke(array $record);
}
