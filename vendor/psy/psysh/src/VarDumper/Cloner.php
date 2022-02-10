<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\VarDumper;

use Symfony\Component\VarDumper\Caster\Caster;
<<<<<<< HEAD
use Symfony\Component\VarDumper\Cloner\Data;
=======
>>>>>>> parent of 31cfa1b1 (p)
use Symfony\Component\VarDumper\Cloner\Stub;
use Symfony\Component\VarDumper\Cloner\VarCloner;

/**
 * A PsySH-specialized VarCloner.
 */
class Cloner extends VarCloner
{
    private $filter = 0;

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function cloneVar($var, $filter = 0): Data
=======
    public function cloneVar($var, $filter = 0)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->filter = $filter;

        return parent::cloneVar($var, $filter);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    protected function castResource(Stub $stub, $isNested): array
=======
    protected function castResource(Stub $stub, $isNested)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return Caster::EXCLUDE_VERBOSE & $this->filter ? [] : parent::castResource($stub, $isNested);
    }
}
