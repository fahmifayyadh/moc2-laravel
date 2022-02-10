<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Readline;

/**
 * An interface abstracting the various readline_* functions.
 */
interface Readline
{
    /**
     * Check whether this Readline class is supported by the current system.
     *
     * @return bool
     */
<<<<<<< HEAD
    public static function isSupported(): bool;

    /**
     * Check whether this Readline class supports bracketed paste.
     *
     * @return bool
     */
    public static function supportsBracketedPaste(): bool;
=======
    public static function isSupported();
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Add a line to the command history.
     *
     * @param string $line
     *
     * @return bool Success
     */
<<<<<<< HEAD
    public function addHistory(string $line): bool;
=======
    public function addHistory($line);
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Clear the command history.
     *
     * @return bool Success
     */
<<<<<<< HEAD
    public function clearHistory(): bool;
=======
    public function clearHistory();
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * List the command history.
     *
     * @return array
     */
<<<<<<< HEAD
    public function listHistory(): array;
=======
    public function listHistory();
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Read the command history.
     *
     * @return bool Success
     */
<<<<<<< HEAD
    public function readHistory(): bool;
=======
    public function readHistory();
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Read a single line of input from the user.
     *
     * @param string|null $prompt
     *
     * @return false|string
     */
<<<<<<< HEAD
    public function readline(string $prompt = null);
=======
    public function readline($prompt = null);
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Redraw readline to redraw the display.
     */
    public function redisplay();

    /**
     * Write the command history to a file.
     *
     * @return bool Success
     */
<<<<<<< HEAD
    public function writeHistory(): bool;
=======
    public function writeHistory();
>>>>>>> parent of 31cfa1b1 (p)
}
