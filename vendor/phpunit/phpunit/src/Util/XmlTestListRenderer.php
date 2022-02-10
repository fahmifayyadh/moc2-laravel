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
use function get_class;
use function implode;
use function str_replace;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\PhptTestCase;
use RecursiveIteratorIterator;
use XMLWriter;
=======
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\PhptTestCase;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class XmlTestListRenderer
{
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function render(TestSuite $suite): string
    {
<<<<<<< HEAD
        $writer = new XMLWriter;
=======
        $writer = new \XMLWriter;
>>>>>>> parent of 31cfa1b1 (p)

        $writer->openMemory();
        $writer->setIndent(true);
        $writer->startDocument();
        $writer->startElement('tests');

        $currentTestCase = null;

<<<<<<< HEAD
        foreach (new RecursiveIteratorIterator($suite->getIterator()) as $test) {
            if ($test instanceof TestCase) {
                if (get_class($test) !== $currentTestCase) {
=======
        foreach (new \RecursiveIteratorIterator($suite->getIterator()) as $test) {
            if ($test instanceof TestCase) {
                if (\get_class($test) !== $currentTestCase) {
>>>>>>> parent of 31cfa1b1 (p)
                    if ($currentTestCase !== null) {
                        $writer->endElement();
                    }

                    $writer->startElement('testCaseClass');
<<<<<<< HEAD
                    $writer->writeAttribute('name', get_class($test));

                    $currentTestCase = get_class($test);
=======
                    $writer->writeAttribute('name', \get_class($test));

                    $currentTestCase = \get_class($test);
>>>>>>> parent of 31cfa1b1 (p)
                }

                $writer->startElement('testCaseMethod');
                $writer->writeAttribute('name', $test->getName(false));
<<<<<<< HEAD
                $writer->writeAttribute('groups', implode(',', $test->getGroups()));
=======
                $writer->writeAttribute('groups', \implode(',', $test->getGroups()));
>>>>>>> parent of 31cfa1b1 (p)

                if (!empty($test->getDataSetAsString(false))) {
                    $writer->writeAttribute(
                        'dataSet',
<<<<<<< HEAD
                        str_replace(
=======
                        \str_replace(
>>>>>>> parent of 31cfa1b1 (p)
                            ' with data set ',
                            '',
                            $test->getDataSetAsString(false)
                        )
                    );
                }

                $writer->endElement();
            } elseif ($test instanceof PhptTestCase) {
                if ($currentTestCase !== null) {
                    $writer->endElement();

                    $currentTestCase = null;
                }

                $writer->startElement('phptFile');
                $writer->writeAttribute('path', $test->getName());
                $writer->endElement();
            }
        }

        if ($currentTestCase !== null) {
            $writer->endElement();
        }

        $writer->endElement();

        return $writer->outputMemory();
    }
}
