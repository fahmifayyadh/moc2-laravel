<<<<<<< HEAD
<?php declare(strict_types = 1);
=======
<?php
>>>>>>> parent of 31cfa1b1 (p)
/*
 * This file is part of PharIo\Manifest.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
<<<<<<< HEAD
=======

>>>>>>> parent of 31cfa1b1 (p)
namespace PharIo\Manifest;

use PharIo\Version\AnyVersionConstraint;
use PharIo\Version\Version;
use PharIo\Version\VersionConstraint;
use XMLWriter;

<<<<<<< HEAD
/** @psalm-suppress MissingConstructor */
class ManifestSerializer {
    /** @var XMLWriter */
    private $xmlWriter;

    public function serializeToFile(Manifest $manifest, string $filename): void {
        \file_put_contents(
=======
class ManifestSerializer {
    /**
     * @var XMLWriter
     */
    private $xmlWriter;

    public function serializeToFile(Manifest $manifest, $filename) {
        file_put_contents(
>>>>>>> parent of 31cfa1b1 (p)
            $filename,
            $this->serializeToString($manifest)
        );
    }

<<<<<<< HEAD
    public function serializeToString(Manifest $manifest): string {
=======
    public function serializeToString(Manifest $manifest) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->startDocument();

        $this->addContains($manifest->getName(), $manifest->getVersion(), $manifest->getType());
        $this->addCopyright($manifest->getCopyrightInformation());
        $this->addRequirements($manifest->getRequirements());
        $this->addBundles($manifest->getBundledComponents());

        return $this->finishDocument();
    }

<<<<<<< HEAD
    private function startDocument(): void {
        $xmlWriter = new XMLWriter();
        $xmlWriter->openMemory();
        $xmlWriter->setIndent(true);
        $xmlWriter->setIndentString(\str_repeat(' ', 4));
=======
    private function startDocument() {
        $xmlWriter = new XMLWriter();
        $xmlWriter->openMemory();
        $xmlWriter->setIndent(true);
        $xmlWriter->setIndentString(str_repeat(' ', 4));
>>>>>>> parent of 31cfa1b1 (p)
        $xmlWriter->startDocument('1.0', 'UTF-8');
        $xmlWriter->startElement('phar');
        $xmlWriter->writeAttribute('xmlns', 'https://phar.io/xml/manifest/1.0');

        $this->xmlWriter = $xmlWriter;
    }

<<<<<<< HEAD
    private function finishDocument(): string {
=======
    private function finishDocument() {
>>>>>>> parent of 31cfa1b1 (p)
        $this->xmlWriter->endElement();
        $this->xmlWriter->endDocument();

        return $this->xmlWriter->outputMemory();
    }

<<<<<<< HEAD
    private function addContains(ApplicationName $name, Version $version, Type $type): void {
        $this->xmlWriter->startElement('contains');
        $this->xmlWriter->writeAttribute('name', $name->asString());
=======
    private function addContains($name, Version $version, Type $type) {
        $this->xmlWriter->startElement('contains');
        $this->xmlWriter->writeAttribute('name', $name);
>>>>>>> parent of 31cfa1b1 (p)
        $this->xmlWriter->writeAttribute('version', $version->getVersionString());

        switch (true) {
            case $type->isApplication(): {
                $this->xmlWriter->writeAttribute('type', 'application');
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
                break;
            }

            case $type->isLibrary(): {
                $this->xmlWriter->writeAttribute('type', 'library');
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
                break;
            }

            case $type->isExtension(): {
<<<<<<< HEAD
                $this->xmlWriter->writeAttribute('type', 'extension');
                /* @var $type Extension */
                $this->addExtension(
                    $type->getApplicationName(),
                    $type->getVersionConstraint()
                );

=======
                /* @var $type Extension */
                $this->xmlWriter->writeAttribute('type', 'extension');
                $this->addExtension($type->getApplicationName(), $type->getVersionConstraint());
>>>>>>> parent of 31cfa1b1 (p)
                break;
            }

            default: {
                $this->xmlWriter->writeAttribute('type', 'custom');
            }
        }

        $this->xmlWriter->endElement();
    }

<<<<<<< HEAD
    private function addCopyright(CopyrightInformation $copyrightInformation): void {
        $this->xmlWriter->startElement('copyright');

        foreach ($copyrightInformation->getAuthors() as $author) {
            $this->xmlWriter->startElement('author');
            $this->xmlWriter->writeAttribute('name', $author->getName());
            $this->xmlWriter->writeAttribute('email', $author->getEmail()->asString());
=======
    private function addCopyright(CopyrightInformation $copyrightInformation) {
        $this->xmlWriter->startElement('copyright');

        foreach($copyrightInformation->getAuthors() as $author) {
            $this->xmlWriter->startElement('author');
            $this->xmlWriter->writeAttribute('name', $author->getName());
            $this->xmlWriter->writeAttribute('email', (string) $author->getEmail());
>>>>>>> parent of 31cfa1b1 (p)
            $this->xmlWriter->endElement();
        }

        $license = $copyrightInformation->getLicense();

        $this->xmlWriter->startElement('license');
        $this->xmlWriter->writeAttribute('type', $license->getName());
<<<<<<< HEAD
        $this->xmlWriter->writeAttribute('url', $license->getUrl()->asString());
=======
        $this->xmlWriter->writeAttribute('url', $license->getUrl());
>>>>>>> parent of 31cfa1b1 (p)
        $this->xmlWriter->endElement();

        $this->xmlWriter->endElement();
    }

<<<<<<< HEAD
    private function addRequirements(RequirementCollection $requirementCollection): void {
        $phpRequirement = new AnyVersionConstraint();
        $extensions     = [];

        foreach ($requirementCollection as $requirement) {
            if ($requirement instanceof PhpVersionRequirement) {
                $phpRequirement = $requirement->getVersionConstraint();

=======
    private function addRequirements(RequirementCollection $requirementCollection) {
        $phpRequirement = new AnyVersionConstraint();
        $extensions     = [];

        foreach($requirementCollection as $requirement) {
            if ($requirement instanceof PhpVersionRequirement) {
                $phpRequirement = $requirement->getVersionConstraint();
>>>>>>> parent of 31cfa1b1 (p)
                continue;
            }

            if ($requirement instanceof PhpExtensionRequirement) {
<<<<<<< HEAD
                $extensions[] = $requirement->asString();
=======
                $extensions[] = (string) $requirement;
>>>>>>> parent of 31cfa1b1 (p)
            }
        }

        $this->xmlWriter->startElement('requires');
        $this->xmlWriter->startElement('php');
        $this->xmlWriter->writeAttribute('version', $phpRequirement->asString());

<<<<<<< HEAD
        foreach ($extensions as $extension) {
=======
        foreach($extensions as $extension) {
>>>>>>> parent of 31cfa1b1 (p)
            $this->xmlWriter->startElement('ext');
            $this->xmlWriter->writeAttribute('name', $extension);
            $this->xmlWriter->endElement();
        }

        $this->xmlWriter->endElement();
        $this->xmlWriter->endElement();
    }

<<<<<<< HEAD
    private function addBundles(BundledComponentCollection $bundledComponentCollection): void {
        if (\count($bundledComponentCollection) === 0) {
=======
    private function addBundles(BundledComponentCollection $bundledComponentCollection) {
        if (count($bundledComponentCollection) === 0) {
>>>>>>> parent of 31cfa1b1 (p)
            return;
        }
        $this->xmlWriter->startElement('bundles');

<<<<<<< HEAD
        foreach ($bundledComponentCollection as $bundledComponent) {
=======
        foreach($bundledComponentCollection as $bundledComponent) {
>>>>>>> parent of 31cfa1b1 (p)
            $this->xmlWriter->startElement('component');
            $this->xmlWriter->writeAttribute('name', $bundledComponent->getName());
            $this->xmlWriter->writeAttribute('version', $bundledComponent->getVersion()->getVersionString());
            $this->xmlWriter->endElement();
        }

        $this->xmlWriter->endElement();
    }

<<<<<<< HEAD
    private function addExtension(ApplicationName $applicationName, VersionConstraint $versionConstraint): void {
        $this->xmlWriter->startElement('extension');
        $this->xmlWriter->writeAttribute('for', $applicationName->asString());
=======
    private function addExtension($application, VersionConstraint $versionConstraint) {
        $this->xmlWriter->startElement('extension');
        $this->xmlWriter->writeAttribute('for', $application);
>>>>>>> parent of 31cfa1b1 (p)
        $this->xmlWriter->writeAttribute('compatible', $versionConstraint->asString());
        $this->xmlWriter->endElement();
    }
}
