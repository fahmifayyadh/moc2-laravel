<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\TabCompletion\Matcher;

abstract class AbstractDefaultParametersMatcher extends AbstractContextAwareMatcher
{
    /**
     * @param \ReflectionParameter[] $reflectionParameters
     *
     * @return array
     */
<<<<<<< HEAD
    public function getDefaultParameterCompletion(array $reflectionParameters): array
=======
    public function getDefaultParameterCompletion(array $reflectionParameters)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $parametersProcessed = [];

        foreach ($reflectionParameters as $parameter) {
            if (!$parameter->isDefaultValueAvailable()) {
                return [];
            }

            $defaultValue = $this->valueToShortString($parameter->getDefaultValue());

            $parametersProcessed[] = "\${$parameter->getName()} = $defaultValue";
        }

        if (empty($parametersProcessed)) {
            return [];
        }

<<<<<<< HEAD
        return [\implode(', ', $parametersProcessed).')'];
=======
        return [\implode(', ', $parametersProcessed) . ')'];
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Takes in the default value of a parameter and turns it into a
     *  string representation that fits inline.
     * This is not 100% true to the original (newlines are inlined, for example).
     *
     * @param mixed $value
     *
     * @return string
     */
<<<<<<< HEAD
    private function valueToShortString($value): string
=======
    private function valueToShortString($value)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!\is_array($value)) {
            return \json_encode($value);
        }

        $chunks = [];
        $chunksSequential = [];

        $allSequential = true;

        foreach ($value as $key => $item) {
            $allSequential = $allSequential && \is_numeric($key) && $key === \count($chunksSequential);

<<<<<<< HEAD
            $keyString = $this->valueToShortString($key);
=======
            $keyString  = $this->valueToShortString($key);
>>>>>>> parent of 31cfa1b1 (p)
            $itemString = $this->valueToShortString($item);

            $chunks[] = "{$keyString} => {$itemString}";
            $chunksSequential[] = $itemString;
        }

        $chunksToImplode = $allSequential ? $chunksSequential : $chunks;

<<<<<<< HEAD
        return '['.\implode(', ', $chunksToImplode).']';
=======
        return '[' . \implode(', ', $chunksToImplode) . ']';
>>>>>>> parent of 31cfa1b1 (p)
    }
}
