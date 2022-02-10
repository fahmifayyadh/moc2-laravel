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
namespace PharIo\Manifest;

use PharIo\Version\Exception as VersionException;
use PharIo\Version\Version;
use PharIo\Version\VersionConstraintParser;

class ManifestDocumentMapper {
    public function map(ManifestDocument $document): Manifest {
=======

namespace PharIo\Manifest;

use PharIo\Version\Version;
use PharIo\Version\Exception as VersionException;
use PharIo\Version\VersionConstraintParser;

class ManifestDocumentMapper {
    /**
     * @param ManifestDocument $document
     *
     * @returns Manifest
     *
     * @throws ManifestDocumentMapperException
     */
    public function map(ManifestDocument $document) {
>>>>>>> parent of 31cfa1b1 (p)
        try {
            $contains          = $document->getContainsElement();
            $type              = $this->mapType($contains);
            $copyright         = $this->mapCopyright($document->getCopyrightElement());
            $requirements      = $this->mapRequirements($document->getRequiresElement());
            $bundledComponents = $this->mapBundledComponents($document);

            return new Manifest(
                new ApplicationName($contains->getName()),
                new Version($contains->getVersion()),
                $type,
                $copyright,
                $requirements,
                $bundledComponents
            );
        } catch (VersionException $e) {
<<<<<<< HEAD
            throw new ManifestDocumentMapperException($e->getMessage(), (int)$e->getCode(), $e);
        } catch (Exception $e) {
            throw new ManifestDocumentMapperException($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    private function mapType(ContainsElement $contains): Type {
=======
            throw new ManifestDocumentMapperException($e->getMessage(), $e->getCode(), $e);
        } catch (Exception $e) {
            throw new ManifestDocumentMapperException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * @param ContainsElement $contains
     *
     * @return Type
     *
     * @throws ManifestDocumentMapperException
     */
    private function mapType(ContainsElement $contains) {
>>>>>>> parent of 31cfa1b1 (p)
        switch ($contains->getType()) {
            case 'application':
                return Type::application();
            case 'library':
                return Type::library();
            case 'extension':
                return $this->mapExtension($contains->getExtensionElement());
        }

        throw new ManifestDocumentMapperException(
<<<<<<< HEAD
            \sprintf('Unsupported type %s', $contains->getType())
        );
    }

    private function mapCopyright(CopyrightElement $copyright): CopyrightInformation {
        $authors = new AuthorCollection();

        foreach ($copyright->getAuthorElements() as $authorElement) {
=======
            sprintf('Unsupported type %s', $contains->getType())
        );
    }

    /**
     * @param CopyrightElement $copyright
     *
     * @return CopyrightInformation
     *
     * @throws InvalidUrlException
     * @throws InvalidEmailException
     */
    private function mapCopyright(CopyrightElement $copyright) {
        $authors = new AuthorCollection();

        foreach($copyright->getAuthorElements() as $authorElement) {
>>>>>>> parent of 31cfa1b1 (p)
            $authors->add(
                new Author(
                    $authorElement->getName(),
                    new Email($authorElement->getEmail())
                )
            );
        }

        $licenseElement = $copyright->getLicenseElement();
        $license        = new License(
            $licenseElement->getType(),
            new Url($licenseElement->getUrl())
        );

        return new CopyrightInformation(
            $authors,
            $license
        );
    }

<<<<<<< HEAD
    private function mapRequirements(RequiresElement $requires): RequirementCollection {
=======
    /**
     * @param RequiresElement $requires
     *
     * @return RequirementCollection
     *
     * @throws ManifestDocumentMapperException
     */
    private function mapRequirements(RequiresElement $requires) {
>>>>>>> parent of 31cfa1b1 (p)
        $collection = new RequirementCollection();
        $phpElement = $requires->getPHPElement();
        $parser     = new VersionConstraintParser;

        try {
            $versionConstraint = $parser->parse($phpElement->getVersion());
        } catch (VersionException $e) {
            throw new ManifestDocumentMapperException(
<<<<<<< HEAD
                \sprintf('Unsupported version constraint - %s', $e->getMessage()),
                (int)$e->getCode(),
=======
                sprintf('Unsupported version constraint - %s', $e->getMessage()),
                $e->getCode(),
>>>>>>> parent of 31cfa1b1 (p)
                $e
            );
        }

        $collection->add(
            new PhpVersionRequirement(
                $versionConstraint
            )
        );

        if (!$phpElement->hasExtElements()) {
            return $collection;
        }

<<<<<<< HEAD
        foreach ($phpElement->getExtElements() as $extElement) {
=======
        foreach($phpElement->getExtElements() as $extElement) {
>>>>>>> parent of 31cfa1b1 (p)
            $collection->add(
                new PhpExtensionRequirement($extElement->getName())
            );
        }

        return $collection;
    }

<<<<<<< HEAD
    private function mapBundledComponents(ManifestDocument $document): BundledComponentCollection {
=======
    /**
     * @param ManifestDocument $document
     *
     * @return BundledComponentCollection
     */
    private function mapBundledComponents(ManifestDocument $document) {
>>>>>>> parent of 31cfa1b1 (p)
        $collection = new BundledComponentCollection();

        if (!$document->hasBundlesElement()) {
            return $collection;
        }

<<<<<<< HEAD
        foreach ($document->getBundlesElement()->getComponentElements() as $componentElement) {
=======
        foreach($document->getBundlesElement()->getComponentElements() as $componentElement) {
>>>>>>> parent of 31cfa1b1 (p)
            $collection->add(
                new BundledComponent(
                    $componentElement->getName(),
                    new Version(
                        $componentElement->getVersion()
                    )
                )
            );
        }

        return $collection;
    }

<<<<<<< HEAD
    private function mapExtension(ExtensionElement $extension): Extension {
        try {
            $versionConstraint = (new VersionConstraintParser)->parse($extension->getCompatible());
=======
    /**
     * @param ExtensionElement $extension
     *
     * @return Extension
     *
     * @throws ManifestDocumentMapperException
     */
    private function mapExtension(ExtensionElement $extension) {
        try {
            $parser            = new VersionConstraintParser;
            $versionConstraint = $parser->parse($extension->getCompatible());
>>>>>>> parent of 31cfa1b1 (p)

            return Type::extension(
                new ApplicationName($extension->getFor()),
                $versionConstraint
            );
        } catch (VersionException $e) {
            throw new ManifestDocumentMapperException(
<<<<<<< HEAD
                \sprintf('Unsupported version constraint - %s', $e->getMessage()),
                (int)$e->getCode(),
=======
                sprintf('Unsupported version constraint - %s', $e->getMessage()),
                $e->getCode(),
>>>>>>> parent of 31cfa1b1 (p)
                $e
            );
        }
    }
}
