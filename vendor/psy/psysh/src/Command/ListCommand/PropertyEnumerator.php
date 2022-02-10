<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Command\ListCommand;

use Symfony\Component\Console\Input\InputInterface;

/**
 * Property Enumerator class.
 */
class PropertyEnumerator extends Enumerator
{
    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    protected function listItems(InputInterface $input, \Reflector $reflector = null, $target = null): array
=======
    protected function listItems(InputInterface $input, \Reflector $reflector = null, $target = null)
>>>>>>> parent of 31cfa1b1 (p)
    {
        // only list properties when a Reflector is present.

        if ($reflector === null) {
            return [];
        }

        // We can only list properties on actual class (or object) reflectors.
        if (!$reflector instanceof \ReflectionClass) {
            return [];
        }

        // only list properties if we are specifically asked
        if (!$input->getOption('properties')) {
            return [];
        }

<<<<<<< HEAD
        $showAll = $input->getOption('all');
        $noInherit = $input->getOption('no-inherit');
=======
        $showAll    = $input->getOption('all');
        $noInherit  = $input->getOption('no-inherit');
>>>>>>> parent of 31cfa1b1 (p)
        $properties = $this->prepareProperties($this->getProperties($showAll, $reflector, $noInherit), $target);

        if (empty($properties)) {
            return [];
        }

        $ret = [];
        $ret[$this->getKindLabel($reflector)] = $properties;

        return $ret;
    }

    /**
     * Get defined properties for the given class or object Reflector.
     *
     * @param bool       $showAll   Include private and protected properties
     * @param \Reflector $reflector
     * @param bool       $noInherit Exclude inherited properties
     *
     * @return array
     */
<<<<<<< HEAD
    protected function getProperties(bool $showAll, \Reflector $reflector, bool $noInherit = false): array
=======
    protected function getProperties($showAll, \Reflector $reflector, $noInherit = false)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $className = $reflector->getName();

        $properties = [];
        foreach ($reflector->getProperties() as $property) {
            if ($noInherit && $property->getDeclaringClass()->getName() !== $className) {
                continue;
            }

            if ($showAll || $property->isPublic()) {
                $properties[$property->getName()] = $property;
            }
        }

<<<<<<< HEAD
        \ksort($properties, \SORT_NATURAL | \SORT_FLAG_CASE);
=======
        \ksort($properties, SORT_NATURAL | SORT_FLAG_CASE);
>>>>>>> parent of 31cfa1b1 (p)

        return $properties;
    }

    /**
     * Prepare formatted property array.
     *
     * @param array $properties
     *
     * @return array
     */
<<<<<<< HEAD
    protected function prepareProperties(array $properties, $target = null): array
=======
    protected function prepareProperties(array $properties, $target = null)
>>>>>>> parent of 31cfa1b1 (p)
    {
        // My kingdom for a generator.
        $ret = [];

        foreach ($properties as $name => $property) {
            if ($this->showItem($name)) {
<<<<<<< HEAD
                $fname = '$'.$name;
=======
                $fname = '$' . $name;
>>>>>>> parent of 31cfa1b1 (p)
                $ret[$fname] = [
                    'name'  => $fname,
                    'style' => $this->getVisibilityStyle($property),
                    'value' => $this->presentValue($property, $target),
                ];
            }
        }

        return $ret;
    }

    /**
     * Get a label for the particular kind of "class" represented.
     *
     * @param \ReflectionClass $reflector
     *
     * @return string
     */
<<<<<<< HEAD
    protected function getKindLabel(\ReflectionClass $reflector): string
=======
    protected function getKindLabel(\ReflectionClass $reflector)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (\method_exists($reflector, 'isTrait') && $reflector->isTrait()) {
            return 'Trait Properties';
        } else {
            return 'Class Properties';
        }
    }

    /**
     * Get output style for the given property's visibility.
     *
     * @param \ReflectionProperty $property
     *
     * @return string
     */
<<<<<<< HEAD
    private function getVisibilityStyle(\ReflectionProperty $property): string
=======
    private function getVisibilityStyle(\ReflectionProperty $property)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($property->isPublic()) {
            return self::IS_PUBLIC;
        } elseif ($property->isProtected()) {
            return self::IS_PROTECTED;
        } else {
            return self::IS_PRIVATE;
        }
    }

    /**
     * Present the $target's current value for a reflection property.
     *
     * @param \ReflectionProperty $property
     * @param mixed               $target
     *
     * @return string
     */
<<<<<<< HEAD
    protected function presentValue(\ReflectionProperty $property, $target): string
    {
        if (!$target) {
            return '';
        }

=======
    protected function presentValue(\ReflectionProperty $property, $target)
    {
>>>>>>> parent of 31cfa1b1 (p)
        // If $target is a class or trait (try to) get the default
        // value for the property.
        if (!\is_object($target)) {
            try {
                $refl = new \ReflectionClass($target);
                $props = $refl->getDefaultProperties();
                if (\array_key_exists($property->name, $props)) {
                    $suffix = $property->isStatic() ? '' : ' <aside>(default)</aside>';

<<<<<<< HEAD
                    return $this->presentRef($props[$property->name]).$suffix;
                }
            } catch (\Throwable $e) {
=======
                    return $this->presentRef($props[$property->name]) . $suffix;
                }
            } catch (\Exception $e) {
>>>>>>> parent of 31cfa1b1 (p)
                // Well, we gave it a shot.
            }

            return '';
        }

        $property->setAccessible(true);
        $value = $property->getValue($target);

        return $this->presentRef($value);
    }
}
