<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy;

<<<<<<< HEAD
=======
use PhpParser\Lexer;
>>>>>>> parent of 31cfa1b1 (p)
use PhpParser\Parser;
use PhpParser\ParserFactory as OriginalParserFactory;

/**
 * Parser factory to abstract over PHP parser library versions.
 */
class ParserFactory
{
<<<<<<< HEAD
    const ONLY_PHP5 = 'ONLY_PHP5';
    const ONLY_PHP7 = 'ONLY_PHP7';
=======
    const ONLY_PHP5   = 'ONLY_PHP5';
    const ONLY_PHP7   = 'ONLY_PHP7';
>>>>>>> parent of 31cfa1b1 (p)
    const PREFER_PHP5 = 'PREFER_PHP5';
    const PREFER_PHP7 = 'PREFER_PHP7';

    /**
     * Possible kinds of parsers for the factory, from PHP parser library.
     *
     * @return array
     */
<<<<<<< HEAD
    public static function getPossibleKinds(): array
=======
    public static function getPossibleKinds()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return ['ONLY_PHP5', 'ONLY_PHP7', 'PREFER_PHP5', 'PREFER_PHP7'];
    }

    /**
<<<<<<< HEAD
=======
     * Is this parser factory supports kinds?
     *
     * PHP parser < 2.0 doesn't support kinds, >= 2.0 — does.
     *
     * @return bool
     */
    public function hasKindsSupport()
    {
        return \class_exists(OriginalParserFactory::class);
    }

    /**
>>>>>>> parent of 31cfa1b1 (p)
     * Default kind (if supported, based on current interpreter's version).
     *
     * @return string|null
     */
    public function getDefaultKind()
    {
<<<<<<< HEAD
        return static::ONLY_PHP7;
=======
        if ($this->hasKindsSupport()) {
            return \version_compare(PHP_VERSION, '7.0', '>=') ? static::ONLY_PHP7 : static::ONLY_PHP5;
        }
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * New parser instance with given kind.
     *
     * @param string|null $kind One of class constants (only for PHP parser 2.0 and above)
     *
     * @return Parser
     */
<<<<<<< HEAD
    public function createParser($kind = null): Parser
    {
        $originalFactory = new OriginalParserFactory();

        $kind = $kind ?: $this->getDefaultKind();

        if (!\in_array($kind, static::getPossibleKinds())) {
            throw new \InvalidArgumentException('Unknown parser kind');
        }

        $parser = $originalFactory->create(\constant(OriginalParserFactory::class.'::'.$kind));

=======
    public function createParser($kind = null)
    {
        if ($this->hasKindsSupport()) {
            $originalFactory = new OriginalParserFactory();

            $kind = $kind ?: $this->getDefaultKind();

            if (!\in_array($kind, static::getPossibleKinds())) {
                throw new \InvalidArgumentException('Unknown parser kind');
            }

            $parser = $originalFactory->create(\constant(OriginalParserFactory::class . '::' . $kind));
        } else {
            if ($kind !== null) {
                throw new \InvalidArgumentException('Install PHP Parser v2.x to specify parser kind');
            }

            $parser = new Parser(new Lexer());
        }

>>>>>>> parent of 31cfa1b1 (p)
        return $parser;
    }
}
