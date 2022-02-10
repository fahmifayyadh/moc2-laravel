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

use DOMDocument;
use DOMElement;

class ManifestDocument {
<<<<<<< HEAD
    public const XMLNS = 'https://phar.io/xml/manifest/1.0';

    /** @var DOMDocument */
    private $dom;

    public static function fromFile(string $filename): ManifestDocument {
        if (!\file_exists($filename)) {
            throw new ManifestDocumentException(
                \sprintf('File "%s" not found', $filename)
            );
        }

        return self::fromString(
            \file_get_contents($filename)
        );
    }

    public static function fromString(string $xmlString): ManifestDocument {
        $prev = \libxml_use_internal_errors(true);
        \libxml_clear_errors();

        $dom = new DOMDocument();
        $dom->loadXML($xmlString);

        $errors = \libxml_get_errors();
        \libxml_use_internal_errors($prev);

        if (\count($errors) !== 0) {
            throw new ManifestDocumentLoadingException($errors);
        }

        return new self($dom);
    }

=======
    const XMLNS = 'https://phar.io/xml/manifest/1.0';

    /**
     * @var DOMDocument
     */
    private $dom;

    /**
     * ManifestDocument constructor.
     *
     * @param DOMDocument $dom
     */
>>>>>>> parent of 31cfa1b1 (p)
    private function __construct(DOMDocument $dom) {
        $this->ensureCorrectDocumentType($dom);

        $this->dom = $dom;
    }

<<<<<<< HEAD
    public function getContainsElement(): ContainsElement {
=======
    public static function fromFile($filename) {
        if (!file_exists($filename)) {
            throw new ManifestDocumentException(
                sprintf('File "%s" not found', $filename)
            );
        }

        return self::fromString(
            file_get_contents($filename)
        );
    }

    public static function fromString($xmlString) {
        $prev = libxml_use_internal_errors(true);
        libxml_clear_errors();

        $dom = new DOMDocument();
        $dom->loadXML($xmlString);

        $errors = libxml_get_errors();
        libxml_use_internal_errors($prev);

        if (count($errors) !== 0) {
            throw new ManifestDocumentLoadingException($errors);
        }

        return new self($dom);
    }

    public function getContainsElement() {
>>>>>>> parent of 31cfa1b1 (p)
        return new ContainsElement(
            $this->fetchElementByName('contains')
        );
    }

<<<<<<< HEAD
    public function getCopyrightElement(): CopyrightElement {
=======
    public function getCopyrightElement() {
>>>>>>> parent of 31cfa1b1 (p)
        return new CopyrightElement(
            $this->fetchElementByName('copyright')
        );
    }

<<<<<<< HEAD
    public function getRequiresElement(): RequiresElement {
=======
    public function getRequiresElement() {
>>>>>>> parent of 31cfa1b1 (p)
        return new RequiresElement(
            $this->fetchElementByName('requires')
        );
    }

<<<<<<< HEAD
    public function hasBundlesElement(): bool {
        return $this->dom->getElementsByTagNameNS(self::XMLNS, 'bundles')->length === 1;
    }

    public function getBundlesElement(): BundlesElement {
=======
    public function hasBundlesElement() {
        return $this->dom->getElementsByTagNameNS(self::XMLNS, 'bundles')->length === 1;
    }

    public function getBundlesElement() {
>>>>>>> parent of 31cfa1b1 (p)
        return new BundlesElement(
            $this->fetchElementByName('bundles')
        );
    }

<<<<<<< HEAD
    private function ensureCorrectDocumentType(DOMDocument $dom): void {
=======
    private function ensureCorrectDocumentType(DOMDocument $dom) {
>>>>>>> parent of 31cfa1b1 (p)
        $root = $dom->documentElement;

        if ($root->localName !== 'phar' || $root->namespaceURI !== self::XMLNS) {
            throw new ManifestDocumentException('Not a phar.io manifest document');
        }
    }

<<<<<<< HEAD
    private function fetchElementByName(string $elementName): DOMElement {
=======
    /**
     * @param $elementName
     *
     * @return DOMElement
     *
     * @throws ManifestDocumentException
     */
    private function fetchElementByName($elementName) {
>>>>>>> parent of 31cfa1b1 (p)
        $element = $this->dom->getElementsByTagNameNS(self::XMLNS, $elementName)->item(0);

        if (!$element instanceof DOMElement) {
            throw new ManifestDocumentException(
<<<<<<< HEAD
                \sprintf('Element %s missing', $elementName)
=======
                sprintf('Element %s missing', $elementName)
>>>>>>> parent of 31cfa1b1 (p)
            );
        }

        return $element;
    }
}
