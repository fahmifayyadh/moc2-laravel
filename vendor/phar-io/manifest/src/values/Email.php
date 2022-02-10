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

class Email {
    /** @var string */
    private $email;

    public function __construct(string $email) {
=======

namespace PharIo\Manifest;

class Email {
    /**
     * @var string
     */
    private $email;

    /**
     * @param string $email
     *
     * @throws InvalidEmailException
     */
    public function __construct($email) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->ensureEmailIsValid($email);

        $this->email = $email;
    }

<<<<<<< HEAD
    public function asString(): string {
        return $this->email;
    }

    private function ensureEmailIsValid(string $url): void {
        if (\filter_var($url, \FILTER_VALIDATE_EMAIL) === false) {
=======
    /**
     * @return string
     */
    public function __toString() {
        return $this->email;
    }

    /**
     * @param string $url
     *
     * @throws InvalidEmailException
     */
    private function ensureEmailIsValid($url) {
        if (filter_var($url, \FILTER_VALIDATE_EMAIL) === false) {
>>>>>>> parent of 31cfa1b1 (p)
            throw new InvalidEmailException;
        }
    }
}
