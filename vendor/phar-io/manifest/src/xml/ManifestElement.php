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

use DOMElement;
use DOMNodeList;

class ManifestElement {
<<<<<<< HEAD
    public const XMLNS = 'https://phar.io/xml/manifest/1.0';

    /** @var DOMElement */
    private $element;

=======
    const XMLNS = 'https://phar.io/xml/manifest/1.0';

    /**
     * @var DOMElement
     */
    private $element;

    /**
     * ContainsElement constructor.
     *
     * @param DOMElement $element
     */
>>>>>>> parent of 31cfa1b1 (p)
    public function __construct(DOMElement $element) {
        $this->element = $element;
    }

<<<<<<< HEAD
    protected function getAttributeValue(string $name): string {
        if (!$this->element->hasAttribute($name)) {
            throw new ManifestElementException(
                \sprintf(
=======
    /**
     * @param string $name
     *
     * @return string
     *
     * @throws ManifestElementException
     */
    protected function getAttributeValue($name) {
        if (!$this->element->hasAttribute($name)) {
            throw new ManifestElementException(
                sprintf(
>>>>>>> parent of 31cfa1b1 (p)
                    'Attribute %s not set on element %s',
                    $name,
                    $this->element->localName
                )
            );
        }

        return $this->element->getAttribute($name);
    }

<<<<<<< HEAD
    protected function getChildByName(string $elementName): DOMElement {
=======
    /**
     * @param $elementName
     *
     * @return DOMElement
     *
     * @throws ManifestElementException
     */
    protected function getChildByName($elementName) {
>>>>>>> parent of 31cfa1b1 (p)
        $element = $this->element->getElementsByTagNameNS(self::XMLNS, $elementName)->item(0);

        if (!$element instanceof DOMElement) {
            throw new ManifestElementException(
<<<<<<< HEAD
                \sprintf('Element %s missing', $elementName)
=======
                sprintf('Element %s missing', $elementName)
>>>>>>> parent of 31cfa1b1 (p)
            );
        }

        return $element;
    }

<<<<<<< HEAD
    protected function getChildrenByName(string $elementName): DOMNodeList {
=======
    /**
     * @param $elementName
     *
     * @return DOMNodeList
     *
     * @throws ManifestElementException
     */
    protected function getChildrenByName($elementName) {
>>>>>>> parent of 31cfa1b1 (p)
        $elementList = $this->element->getElementsByTagNameNS(self::XMLNS, $elementName);

        if ($elementList->length === 0) {
            throw new ManifestElementException(
<<<<<<< HEAD
                \sprintf('Element(s) %s missing', $elementName)
=======
                sprintf('Element(s) %s missing', $elementName)
>>>>>>> parent of 31cfa1b1 (p)
            );
        }

        return $elementList;
    }

<<<<<<< HEAD
    protected function hasChild(string $elementName): bool {
=======
    /**
     * @param string $elementName
     *
     * @return bool
     */
    protected function hasChild($elementName) {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->element->getElementsByTagNameNS(self::XMLNS, $elementName)->length !== 0;
    }
}
