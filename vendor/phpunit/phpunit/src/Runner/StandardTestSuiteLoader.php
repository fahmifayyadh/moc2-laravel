<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner;

<<<<<<< HEAD
use function array_diff;
use function array_values;
use function class_exists;
use function get_declared_classes;
use function realpath;
use function sprintf;
use function str_replace;
use function strlen;
use function substr;
use PHPUnit\Framework\TestCase;
use PHPUnit\Util\FileLoader;
use PHPUnit\Util\Filesystem;
use ReflectionClass;
use ReflectionException;
=======
use PHPUnit\Framework\TestCase;
use PHPUnit\Util\FileLoader;
use PHPUnit\Util\Filesystem;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class StandardTestSuiteLoader implements TestSuiteLoader
{
    /**
<<<<<<< HEAD
     * @throws \PHPUnit\Framework\Exception
     * @throws Exception
     */
    public function load(string $suiteClassName, string $suiteClassFile = ''): ReflectionClass
    {
        $suiteClassName = str_replace('.php', '', $suiteClassName);
=======
     * @throws Exception
     * @throws \PHPUnit\Framework\Exception
     */
    public function load(string $suiteClassName, string $suiteClassFile = ''): \ReflectionClass
    {
        $suiteClassName = \str_replace('.php', '', $suiteClassName);
>>>>>>> parent of 31cfa1b1 (p)
        $filename       = null;

        if (empty($suiteClassFile)) {
            $suiteClassFile = Filesystem::classNameToFilename(
                $suiteClassName
            );
        }

<<<<<<< HEAD
        if (!class_exists($suiteClassName, false)) {
            $loadedClasses = get_declared_classes();

            $filename = FileLoader::checkAndLoad($suiteClassFile);

            $loadedClasses = array_values(
                array_diff(get_declared_classes(), $loadedClasses)
            );
        }

        if (!empty($loadedClasses) && !class_exists($suiteClassName, false)) {
            $offset = 0 - strlen($suiteClassName);

            foreach ($loadedClasses as $loadedClass) {
                try {
                    $class = new ReflectionClass($loadedClass);
                    // @codeCoverageIgnoreStart
                } catch (ReflectionException $e) {
=======
        if (!\class_exists($suiteClassName, false)) {
            $loadedClasses = \get_declared_classes();

            $filename = FileLoader::checkAndLoad($suiteClassFile);

            $loadedClasses = \array_values(
                \array_diff(\get_declared_classes(), $loadedClasses)
            );
        }

        if (!empty($loadedClasses) && !\class_exists($suiteClassName, false)) {
            $offset = 0 - \strlen($suiteClassName);

            foreach ($loadedClasses as $loadedClass) {
                try {
                    $class = new \ReflectionClass($loadedClass);
                    // @codeCoverageIgnoreStart
                } catch (\ReflectionException $e) {
>>>>>>> parent of 31cfa1b1 (p)
                    throw new Exception(
                        $e->getMessage(),
                        (int) $e->getCode(),
                        $e
                    );
                }
                // @codeCoverageIgnoreEnd

<<<<<<< HEAD
                if (substr($loadedClass, $offset) === $suiteClassName &&
=======
                if (\substr($loadedClass, $offset) === $suiteClassName &&
>>>>>>> parent of 31cfa1b1 (p)
                    $class->getFileName() == $filename) {
                    $suiteClassName = $loadedClass;

                    break;
                }
            }
        }

<<<<<<< HEAD
        if (!empty($loadedClasses) && !class_exists($suiteClassName, false)) {
=======
        if (!empty($loadedClasses) && !\class_exists($suiteClassName, false)) {
>>>>>>> parent of 31cfa1b1 (p)
            $testCaseClass = TestCase::class;

            foreach ($loadedClasses as $loadedClass) {
                try {
<<<<<<< HEAD
                    $class = new ReflectionClass($loadedClass);
                    // @codeCoverageIgnoreStart
                } catch (ReflectionException $e) {
=======
                    $class = new \ReflectionClass($loadedClass);
                    // @codeCoverageIgnoreStart
                } catch (\ReflectionException $e) {
>>>>>>> parent of 31cfa1b1 (p)
                    throw new Exception(
                        $e->getMessage(),
                        (int) $e->getCode(),
                        $e
                    );
                }
                // @codeCoverageIgnoreEnd

                $classFile = $class->getFileName();

                if ($class->isSubclassOf($testCaseClass) && !$class->isAbstract()) {
                    $suiteClassName = $loadedClass;
                    $testCaseClass  = $loadedClass;

<<<<<<< HEAD
                    if ($classFile == realpath($suiteClassFile)) {
=======
                    if ($classFile == \realpath($suiteClassFile)) {
>>>>>>> parent of 31cfa1b1 (p)
                        break;
                    }
                }

                if ($class->hasMethod('suite')) {
                    try {
                        $method = $class->getMethod('suite');
                        // @codeCoverageIgnoreStart
<<<<<<< HEAD
                    } catch (ReflectionException $e) {
=======
                    } catch (\ReflectionException $e) {
>>>>>>> parent of 31cfa1b1 (p)
                        throw new Exception(
                            $e->getMessage(),
                            (int) $e->getCode(),
                            $e
                        );
                    }
                    // @codeCoverageIgnoreEnd

                    if (!$method->isAbstract() && $method->isPublic() && $method->isStatic()) {
                        $suiteClassName = $loadedClass;

<<<<<<< HEAD
                        if ($classFile == realpath($suiteClassFile)) {
=======
                        if ($classFile == \realpath($suiteClassFile)) {
>>>>>>> parent of 31cfa1b1 (p)
                            break;
                        }
                    }
                }
            }
        }

<<<<<<< HEAD
        if (class_exists($suiteClassName, false)) {
            try {
                $class = new ReflectionClass($suiteClassName);
                // @codeCoverageIgnoreStart
            } catch (ReflectionException $e) {
=======
        if (\class_exists($suiteClassName, false)) {
            try {
                $class = new \ReflectionClass($suiteClassName);
                // @codeCoverageIgnoreStart
            } catch (\ReflectionException $e) {
>>>>>>> parent of 31cfa1b1 (p)
                throw new Exception(
                    $e->getMessage(),
                    (int) $e->getCode(),
                    $e
                );
            }
            // @codeCoverageIgnoreEnd

<<<<<<< HEAD
            if ($class->getFileName() == realpath($suiteClassFile)) {
=======
            if ($class->getFileName() == \realpath($suiteClassFile)) {
>>>>>>> parent of 31cfa1b1 (p)
                return $class;
            }
        }

        throw new Exception(
<<<<<<< HEAD
            sprintf(
=======
            \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
                "Class '%s' could not be found in '%s'.",
                $suiteClassName,
                $suiteClassFile
            )
        );
    }

<<<<<<< HEAD
    public function reload(ReflectionClass $aClass): ReflectionClass
=======
    public function reload(\ReflectionClass $aClass): \ReflectionClass
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $aClass;
    }
}
