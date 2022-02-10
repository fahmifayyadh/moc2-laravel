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

use Hoa\Console\Console;
use Hoa\Console\Cursor;
use Hoa\Console\Readline\Readline as HoaReadline;
use Psy\Exception\BreakException;

/**
 * Hoa\Console Readline implementation.
 */
class HoaConsole implements Readline
{
    /** @var HoaReadline */
    private $hoaReadline;

    /** @var string|null */
    private $lastPrompt;

    /**
     * @return bool
     */
<<<<<<< HEAD
    public static function isSupported(): bool
=======
    public static function isSupported()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return \class_exists(Console::class, true);
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public static function supportsBracketedPaste(): bool
    {
        return false;
    }

=======
>>>>>>> parent of 31cfa1b1 (p)
    public function __construct()
    {
        $this->hoaReadline = new HoaReadline();
        $this->hoaReadline->addMapping('\C-l', function () {
            $this->redisplay();

            return HoaReadline::STATE_NO_ECHO;
        });
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
        $this->hoaReadline->addHistory($line);

        return true;
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
        $this->hoaReadline->clearHistory();

        return true;
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function listHistory(): array
=======
    public function listHistory()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $i = 0;
        $list = [];
        while (($item = $this->hoaReadline->getHistory($i++)) !== null) {
            $list[] = $item;
        }

        return $list;
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function readHistory(): bool
=======
    public function readHistory()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @throws BreakException if user hits Ctrl+D
     *
<<<<<<< HEAD
     * @return false|string
     */
    public function readline(string $prompt = null)
=======
     * @return string
     */
    public function readline($prompt = null)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->lastPrompt = $prompt;

        return $this->hoaReadline->readLine($prompt);
    }

    /**
     * {@inheritdoc}
     */
    public function redisplay()
    {
        $currentLine = $this->hoaReadline->getLine();
        Cursor::clear('all');
        echo $this->lastPrompt, $currentLine;
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
        return true;
    }
}
