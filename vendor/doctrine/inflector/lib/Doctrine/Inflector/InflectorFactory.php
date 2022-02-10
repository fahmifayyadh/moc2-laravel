<?php

declare(strict_types=1);

namespace Doctrine\Inflector;

use Doctrine\Inflector\Rules\English;
use Doctrine\Inflector\Rules\French;
use Doctrine\Inflector\Rules\NorwegianBokmal;
use Doctrine\Inflector\Rules\Portuguese;
use Doctrine\Inflector\Rules\Spanish;
use Doctrine\Inflector\Rules\Turkish;
use InvalidArgumentException;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function sprintf;

final class InflectorFactory
{
<<<<<<< HEAD
    public static function create(): LanguageInflectorFactory
=======
    public static function create() : LanguageInflectorFactory
>>>>>>> parent of 31cfa1b1 (p)
    {
        return self::createForLanguage(Language::ENGLISH);
    }

<<<<<<< HEAD
    public static function createForLanguage(string $language): LanguageInflectorFactory
=======
    public static function createForLanguage(string $language) : LanguageInflectorFactory
>>>>>>> parent of 31cfa1b1 (p)
    {
        switch ($language) {
            case Language::ENGLISH:
                return new English\InflectorFactory();
<<<<<<< HEAD

            case Language::FRENCH:
                return new French\InflectorFactory();

            case Language::NORWEGIAN_BOKMAL:
                return new NorwegianBokmal\InflectorFactory();

            case Language::PORTUGUESE:
                return new Portuguese\InflectorFactory();

            case Language::SPANISH:
                return new Spanish\InflectorFactory();

            case Language::TURKISH:
                return new Turkish\InflectorFactory();

=======
            case Language::FRENCH:
                return new French\InflectorFactory();
            case Language::NORWEGIAN_BOKMAL:
                return new NorwegianBokmal\InflectorFactory();
            case Language::PORTUGUESE:
                return new Portuguese\InflectorFactory();
            case Language::SPANISH:
                return new Spanish\InflectorFactory();
            case Language::TURKISH:
                return new Turkish\InflectorFactory();
>>>>>>> parent of 31cfa1b1 (p)
            default:
                throw new InvalidArgumentException(sprintf(
                    'Language "%s" is not supported.',
                    $language
                ));
        }
    }
}
