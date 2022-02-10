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

use Monolog\Logger;
<<<<<<< HEAD
use Psr\Log\LogLevel;
=======
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Injects Hg branch and Hg revision number in all records
 *
 * @author Jonathan A. Schweder <jonathanschweder@gmail.com>
<<<<<<< HEAD
 *
 * @phpstan-import-type LevelName from \Monolog\Logger
 * @phpstan-import-type Level from \Monolog\Logger
 */
class MercurialProcessor implements ProcessorInterface
{
    /** @var Level */
    private $level;
    /** @var array{branch: string, revision: string}|array<never>|null */
    private static $cache = null;

    /**
     * @param int|string $level The minimum logging level at which this Processor will be triggered
     *
     * @phpstan-param Level|LevelName|LogLevel::* $level
=======
 */
class MercurialProcessor implements ProcessorInterface
{
    private $level;
    private static $cache;

    /**
     * @param string|int $level The minimum logging level at which this Processor will be triggered
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct($level = Logger::DEBUG)
    {
        $this->level = Logger::toMonologLevel($level);
    }

<<<<<<< HEAD
    /**
     * {@inheritDoc}
     */
=======
>>>>>>> parent of 31cfa1b1 (p)
    public function __invoke(array $record): array
    {
        // return if the level is not high enough
        if ($record['level'] < $this->level) {
            return $record;
        }

        $record['extra']['hg'] = self::getMercurialInfo();

        return $record;
    }

<<<<<<< HEAD
    /**
     * @return array{branch: string, revision: string}|array<never>
     */
=======
>>>>>>> parent of 31cfa1b1 (p)
    private static function getMercurialInfo(): array
    {
        if (self::$cache) {
            return self::$cache;
        }

        $result = explode(' ', trim(`hg id -nb`));

        if (count($result) >= 3) {
            return self::$cache = [
                'branch' => $result[1],
                'revision' => $result[2],
            ];
        }

        return self::$cache = [];
    }
}
