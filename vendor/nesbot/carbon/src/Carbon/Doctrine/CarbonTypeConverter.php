<?php

/**
<<<<<<< HEAD
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

=======
 * Thanks to https://github.com/flaushi for his suggestion:
 * https://github.com/doctrine/dbal/issues/2873#issuecomment-534956358
 */
>>>>>>> parent of 31cfa1b1 (p)
namespace Carbon\Doctrine;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use DateTimeInterface;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\ConversionException;
use Exception;

<<<<<<< HEAD
/**
 * @template T of CarbonInterface
 */
trait CarbonTypeConverter
{
    /**
     * @return class-string<T>
     */
=======
trait CarbonTypeConverter
{
>>>>>>> parent of 31cfa1b1 (p)
    protected function getCarbonClassName(): string
    {
        return Carbon::class;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $precision = $fieldDeclaration['precision'] ?: 10;

        if ($fieldDeclaration['secondPrecision'] ?? false) {
            $precision = 0;
        }

        if ($precision === 10) {
            $precision = DateTimeDefaultPrecision::get();
        }

=======
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $precision = ($fieldDeclaration['precision'] ?: 10) === 10
            ? DateTimeDefaultPrecision::get()
            : $fieldDeclaration['precision'];
>>>>>>> parent of 31cfa1b1 (p)
        $type = parent::getSQLDeclaration($fieldDeclaration, $platform);

        if (!$precision) {
            return $type;
        }

<<<<<<< HEAD
        if (str_contains($type, '(')) {
            return preg_replace('/\(\d+\)/', "($precision)", $type);
        }

        [$before, $after] = explode(' ', "$type ");
=======
        if (strpos($type, '(') !== false) {
            return preg_replace('/\(\d+\)/', "($precision)", $type);
        }

        list($before, $after) = explode(' ', "$type ");
>>>>>>> parent of 31cfa1b1 (p)

        return trim("$before($precision) $after");
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
<<<<<<< HEAD
     *
     * @return T|null
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $class = $this->getCarbonClassName();

        if ($value === null || is_a($value, $class)) {
            return $value;
        }

        if ($value instanceof DateTimeInterface) {
            return $class::instance($value);
        }

        $date = null;
        $error = null;

        try {
            $date = $class::parse($value);
        } catch (Exception $exception) {
            $error = $exception;
        }

        if (!$date) {
            throw ConversionException::conversionFailedFormat(
                $value,
                $this->getName(),
                'Y-m-d H:i:s.u or any format supported by '.$class.'::parse()',
                $error
            );
        }

        return $date;
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value === null) {
            return $value;
        }

<<<<<<< HEAD
        if ($value instanceof DateTimeInterface) {
=======
        if ($value instanceof DateTimeInterface || $value instanceof CarbonInterface) {
>>>>>>> parent of 31cfa1b1 (p)
            return $value->format('Y-m-d H:i:s.u');
        }

        throw ConversionException::conversionFailedInvalidType(
            $value,
            $this->getName(),
            ['null', 'DateTime', 'Carbon']
        );
    }
}
