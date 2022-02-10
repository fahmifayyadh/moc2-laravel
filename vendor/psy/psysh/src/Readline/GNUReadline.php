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
 * A Readline interface implementation for GNU Readline.
 *
<<<<<<< HEAD
 * This is by far the coolest way to do it, if you can.
=======
 * This is by far the coolest way to do it, but it doesn't work with new PHP.
>>>>>>> parent of 31cfa1b1 (p)
 *
 * Oh well.
 */
class GNUReadline implements Readline
{
    /** @var string|false */
    protected $historyFile;
    /** @var int */
    protected $historySize;
    /** @var bool */
    protected $eraseDups;

    /**
     * GNU Readline is supported iff `readline_list_history` is defined. PHP
     * decided it would be awesome to swap out GNU Readline for Libedit, but
     * they ended up shipping an incomplete implementation. So we've got this.
     *
<<<<<<< HEAD
     * NOTE: As of PHP 7.4, PHP sometimes has history support in the Libedit
     * wrapper, so that will use the GNUReadline implementation as well!
     *
     * @return bool
     */
    public static function isSupported(): bool
    {
        return \function_exists('readline') && \function_exists('readline_list_history');
    }

    /**
     * Check whether this readline implementation supports bracketed paste.
     *
     * Currently, the GNU readline implementation does, but the libedit wrapper does not.
     *
     * @return bool
     */
    public static function supportsBracketedPaste(): bool
    {
        return self::isSupported() && \stripos(\readline_info('library_version') ?: '', 'editline') === false;
=======
     * @return bool
     */
    public static function isSupported()
    {
        return \function_exists('readline_list_history');
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * GNU Readline constructor.
     *
     * @param string|false $historyFile
     * @param int          $historySize
     * @param bool         $eraseDups
     */
    public function __construct($historyFile = null, $historySize = 0, $eraseDups = false)
    {
        $this->historyFile = ($historyFile !== null) ? $historyFile : false;
        $this->historySize = $historySize;
<<<<<<< HEAD
        $this->eraseDups = $eraseDups;

        \readline_info('readline_name', 'psysh');
=======
        $this->eraseDups   = $eraseDups;

        // HHVM errors on this, so HHVM doesn't get a readline_name.
        if (!\defined('HHVM_VERSION')) {
            \readline_info('readline_name', 'psysh');
        }
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function addHistory(string $line): bool
=======
    public function addHistory($line)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($res = \readline_add_history($line)) {
            $this->writeHistory();
        }

        return $res;
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function clearHistory(): bool
=======
    public function clearHistory()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($res = \readline_clear_history()) {
            $this->writeHistory();
        }

        return $res;
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function listHistory(): array
    {
        return \readline_list_history();
=======
    public function listHistory()
    {
        return readline_list_history();
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function readHistory(): bool
    {
        \readline_read_history();
=======
    public function readHistory()
    {
        // Workaround PHP bug #69054
        //
        // If open_basedir is set, readline_read_history() segfaults. This was fixed in 5.6.7:
        //
        //     https://github.com/php/php-src/blob/423a057023ef3c00d2ffc16a6b43ba01d0f71796/NEWS#L19-L21
        //
        if (\version_compare(PHP_VERSION, '5.6.7', '>=') || !\ini_get('open_basedir')) {
            \readline_read_history();
        }
>>>>>>> parent of 31cfa1b1 (p)
        \readline_clear_history();

        return \readline_read_history($this->historyFile);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function readline(string $prompt = null)
=======
    public function readline($prompt = null)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return \readline($prompt);
    }

    /**
     * {@inheritdoc}
     */
    public function redisplay()
    {
        \readline_redisplay();
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function writeHistory(): bool
=======
    public function writeHistory()
>>>>>>> parent of 31cfa1b1 (p)
    {
        // We have to write history first, since it is used
        // by Libedit to list history
        if ($this->historyFile !== false) {
            $res = \readline_write_history($this->historyFile);
        } else {
            $res = true;
        }

        if (!$res || !$this->eraseDups && !$this->historySize > 0) {
            return $res;
        }

        $hist = $this->listHistory();
        if (!$hist) {
            return true;
        }

        if ($this->eraseDups) {
            // flip-flip technique: removes duplicates, latest entries win.
            $hist = \array_flip(\array_flip($hist));
            // sort on keys to get the order back
            \ksort($hist);
        }

        if ($this->historySize > 0) {
            $histsize = \count($hist);
            if ($histsize > $this->historySize) {
                $hist = \array_slice($hist, $histsize - $this->historySize);
            }
        }

        \readline_clear_history();
        foreach ($hist as $line) {
            \readline_add_history($line);
        }

        if ($this->historyFile !== false) {
            return \readline_write_history($this->historyFile);
        }

        return true;
    }
}
