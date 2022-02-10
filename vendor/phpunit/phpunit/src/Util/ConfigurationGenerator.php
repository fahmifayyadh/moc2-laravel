<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

<<<<<<< HEAD
use function str_replace;

=======
>>>>>>> parent of 31cfa1b1 (p)
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConfigurationGenerator
{
    /**
     * @var string
     */
<<<<<<< HEAD
    private const TEMPLATE = <<<'EOT'
=======
    private const TEMPLATE = <<<EOT
>>>>>>> parent of 31cfa1b1 (p)
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/{phpunit_version}/phpunit.xsd"
         bootstrap="{bootstrap_script}"
         executionOrder="depends,defects"
         forceCoversAnnotation="true"
         beStrictAboutCoversAnnotation="true"
         beStrictAboutOutputDuringTests="true"
         beStrictAboutTodoAnnotatedTests="true"
<<<<<<< HEAD
         convertDeprecationsToExceptions="true"
         verbose="true">
    <testsuites>
        <testsuite name="default">
            <directory>{tests_directory}</directory>
=======
         verbose="true">
    <testsuites>
        <testsuite name="default">
            <directory suffix="Test.php">{tests_directory}</directory>
>>>>>>> parent of 31cfa1b1 (p)
        </testsuite>
    </testsuites>

    <filter>
        <whitelist processUncoveredFilesFromWhitelist="true">
            <directory suffix=".php">{src_directory}</directory>
        </whitelist>
    </filter>
</phpunit>

EOT;

    public function generateDefaultConfiguration(string $phpunitVersion, string $bootstrapScript, string $testsDirectory, string $srcDirectory): string
    {
<<<<<<< HEAD
        return str_replace(
=======
        return \str_replace(
>>>>>>> parent of 31cfa1b1 (p)
            [
                '{phpunit_version}',
                '{bootstrap_script}',
                '{tests_directory}',
                '{src_directory}',
            ],
            [
                $phpunitVersion,
                $bootstrapScript,
                $testsDirectory,
                $srcDirectory,
            ],
            self::TEMPLATE
        );
    }
}
