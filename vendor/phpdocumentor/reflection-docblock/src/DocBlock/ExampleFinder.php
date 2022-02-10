<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock\Tags\Example;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function array_slice;
use function file;
use function getcwd;
use function implode;
use function is_readable;
use function rtrim;
use function sprintf;
use function trim;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use const DIRECTORY_SEPARATOR;

/**
 * Class used to find an example file's location based on a given ExampleDescriptor.
 */
class ExampleFinder
{
    /** @var string */
    private $sourceDirectory = '';

    /** @var string[] */
    private $exampleDirectories = [];

    /**
     * Attempts to find the example contents for the given descriptor.
     */
<<<<<<< HEAD
    public function find(Example $example): string
=======
    public function find(Example $example) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        $filename = $example->getFilePath();

        $file = $this->getExampleFileContents($filename);
        if (!$file) {
            return sprintf('** File not found : %s **', $filename);
        }

        return implode('', array_slice($file, $example->getStartingLine() - 1, $example->getLineCount()));
    }

    /**
     * Registers the project's root directory where an 'examples' folder can be expected.
     */
<<<<<<< HEAD
    public function setSourceDirectory(string $directory = ''): void
=======
    public function setSourceDirectory(string $directory = '') : void
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->sourceDirectory = $directory;
    }

    /**
     * Returns the project's root directory where an 'examples' folder can be expected.
     */
<<<<<<< HEAD
    public function getSourceDirectory(): string
=======
    public function getSourceDirectory() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->sourceDirectory;
    }

    /**
     * Registers a series of directories that may contain examples.
     *
     * @param string[] $directories
     */
<<<<<<< HEAD
    public function setExampleDirectories(array $directories): void
=======
    public function setExampleDirectories(array $directories) : void
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->exampleDirectories = $directories;
    }

    /**
     * Returns a series of directories that may contain examples.
     *
     * @return string[]
     */
<<<<<<< HEAD
    public function getExampleDirectories(): array
=======
    public function getExampleDirectories() : array
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->exampleDirectories;
    }

    /**
     * Attempts to find the requested example file and returns its contents or null if no file was found.
     *
     * This method will try several methods in search of the given example file, the first one it encounters is
     * returned:
     *
     * 1. Iterates through all examples folders for the given filename
     * 2. Checks the source folder for the given filename
     * 3. Checks the 'examples' folder in the current working directory for examples
     * 4. Checks the path relative to the current working directory for the given filename
     *
     * @return string[] all lines of the example file
     */
<<<<<<< HEAD
    private function getExampleFileContents(string $filename): ?array
=======
    private function getExampleFileContents(string $filename) : ?array
>>>>>>> parent of 31cfa1b1 (p)
    {
        $normalizedPath = null;

        foreach ($this->exampleDirectories as $directory) {
            $exampleFileFromConfig = $this->constructExamplePath($directory, $filename);
            if (is_readable($exampleFileFromConfig)) {
                $normalizedPath = $exampleFileFromConfig;
                break;
            }
        }

        if (!$normalizedPath) {
            if (is_readable($this->getExamplePathFromSource($filename))) {
                $normalizedPath = $this->getExamplePathFromSource($filename);
            } elseif (is_readable($this->getExamplePathFromExampleDirectory($filename))) {
                $normalizedPath = $this->getExamplePathFromExampleDirectory($filename);
            } elseif (is_readable($filename)) {
                $normalizedPath = $filename;
            }
        }

        $lines = $normalizedPath && is_readable($normalizedPath) ? file($normalizedPath) : false;

        return $lines !== false ? $lines : null;
    }

    /**
     * Get example filepath based on the example directory inside your project.
     */
<<<<<<< HEAD
    private function getExamplePathFromExampleDirectory(string $file): string
=======
    private function getExamplePathFromExampleDirectory(string $file) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return getcwd() . DIRECTORY_SEPARATOR . 'examples' . DIRECTORY_SEPARATOR . $file;
    }

    /**
     * Returns a path to the example file in the given directory..
     */
<<<<<<< HEAD
    private function constructExamplePath(string $directory, string $file): string
=======
    private function constructExamplePath(string $directory, string $file) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return rtrim($directory, '\\/') . DIRECTORY_SEPARATOR . $file;
    }

    /**
     * Get example filepath based on sourcecode.
     */
<<<<<<< HEAD
    private function getExamplePathFromSource(string $file): string
=======
    private function getExamplePathFromSource(string $file) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return sprintf(
            '%s%s%s',
            trim($this->getSourceDirectory(), '\\/'),
            DIRECTORY_SEPARATOR,
            trim($file, '"')
        );
    }
}
