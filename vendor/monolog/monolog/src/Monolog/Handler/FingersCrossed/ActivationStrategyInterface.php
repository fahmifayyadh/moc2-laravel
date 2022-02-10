<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler\FingersCrossed;

/**
 * Interface for activation strategies for the FingersCrossedHandler.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
<<<<<<< HEAD
 *
 * @phpstan-import-type Record from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
interface ActivationStrategyInterface
{
    /**
     * Returns whether the given record activates the handler.
<<<<<<< HEAD
     *
     * @phpstan-param Record $record
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function isHandlerActivated(array $record): bool;
}
