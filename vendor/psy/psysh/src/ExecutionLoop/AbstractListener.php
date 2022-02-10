<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\ExecutionLoop;

use Psy\Shell;

/**
 * Abstract Execution Loop Listener class.
 */
abstract class AbstractListener implements Listener
{
    /**
     * {@inheritdoc}
     */
    public function beforeRun(Shell $shell)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function beforeLoop(Shell $shell)
    {
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function onInput(Shell $shell, string $input)
=======
    public function onInput(Shell $shell, $input)
>>>>>>> parent of 31cfa1b1 (p)
    {
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function onExecute(Shell $shell, string $code)
=======
    public function onExecute(Shell $shell, $code)
>>>>>>> parent of 31cfa1b1 (p)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoop(Shell $shell)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function afterRun(Shell $shell)
    {
    }
}
