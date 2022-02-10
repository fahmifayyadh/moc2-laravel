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

use Doctrine\DBAL\Platforms\AbstractPlatform;

class CarbonType extends DateTimeType implements CarbonDoctrineType
{
    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function getName()
    {
        return 'carbon';
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}
