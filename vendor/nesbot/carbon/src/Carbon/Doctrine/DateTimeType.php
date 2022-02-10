<?php

/**
 * Thanks to https://github.com/flaushi for his suggestion:
 * https://github.com/doctrine/dbal/issues/2873#issuecomment-534956358
 */
namespace Carbon\Doctrine;

<<<<<<< HEAD
use Carbon\Carbon;
=======
>>>>>>> parent of 31cfa1b1 (p)
use Doctrine\DBAL\Types\VarDateTimeType;

class DateTimeType extends VarDateTimeType implements CarbonDoctrineType
{
<<<<<<< HEAD
    /** @use CarbonTypeConverter<Carbon> */
=======
>>>>>>> parent of 31cfa1b1 (p)
    use CarbonTypeConverter;
}
