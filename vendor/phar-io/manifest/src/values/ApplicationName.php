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

class ApplicationName {
    /** @var string */
    private $name;

    public function __construct(string $name) {
=======

namespace PharIo\Manifest;

class ApplicationName {
    /**
     * @var string
     */
    private $name;

    /**
     * ApplicationName constructor.
     *
     * @param string $name
     *
     * @throws InvalidApplicationNameException
     */
    public function __construct($name) {
        $this->ensureIsString($name);
>>>>>>> parent of 31cfa1b1 (p)
        $this->ensureValidFormat($name);
        $this->name = $name;
    }

<<<<<<< HEAD
    public function asString(): string {
        return $this->name;
    }

    public function isEqual(ApplicationName $name): bool {
        return $this->name === $name->name;
    }

    private function ensureValidFormat(string $name): void {
        if (!\preg_match('#\w/\w#', $name)) {
            throw new InvalidApplicationNameException(
                \sprintf('Format of name "%s" is not valid - expected: vendor/packagename', $name),
=======
    /**
     * @return string
     */
    public function __toString() {
        return $this->name;
    }

    public function isEqual(ApplicationName $name) {
        return $this->name === $name->name;
    }

    /**
     * @param string $name
     *
     * @throws InvalidApplicationNameException
     */
    private function ensureValidFormat($name) {
        if (!preg_match('#\w/\w#', $name)) {
            throw new InvalidApplicationNameException(
                sprintf('Format of name "%s" is not valid - expected: vendor/packagename', $name),
>>>>>>> parent of 31cfa1b1 (p)
                InvalidApplicationNameException::InvalidFormat
            );
        }
    }
<<<<<<< HEAD
=======

    private function ensureIsString($name) {
        if (!is_string($name)) {
            throw new InvalidApplicationNameException(
                'Name must be a string',
                InvalidApplicationNameException::NotAString
            );
        }
    }
>>>>>>> parent of 31cfa1b1 (p)
}
