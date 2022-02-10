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

class Url {
    /** @var string */
    private $url;

    public function __construct(string $url) {
=======

namespace PharIo\Manifest;

class Url {
    /**
     * @var string
     */
    private $url;

    /**
     * @param string $url
     *
     * @throws InvalidUrlException
     */
    public function __construct($url) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->ensureUrlIsValid($url);

        $this->url = $url;
    }

<<<<<<< HEAD
    public function asString(): string {
=======
    /**
     * @return string
     */
    public function __toString() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @throws InvalidUrlException
     */
<<<<<<< HEAD
    private function ensureUrlIsValid($url): void {
        if (\filter_var($url, \FILTER_VALIDATE_URL) === false) {
=======
    private function ensureUrlIsValid($url) {
        if (filter_var($url, \FILTER_VALIDATE_URL) === false) {
>>>>>>> parent of 31cfa1b1 (p)
            throw new InvalidUrlException;
        }
    }
}
