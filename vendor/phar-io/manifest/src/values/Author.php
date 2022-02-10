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

class Author {
    /** @var string */
    private $name;

    /** @var Email */
    private $email;

    public function __construct(string $name, Email $email) {
=======

namespace PharIo\Manifest;

class Author {
    /**
     * @var string
     */
    private $name;

    /**
     * @var Email
     */
    private $email;

    /**
     * @param string $name
     * @param Email  $email
     */
    public function __construct($name, Email $email) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->name  = $name;
        $this->email = $email;
    }

<<<<<<< HEAD
    public function asString(): string {
        return \sprintf(
            '%s <%s>',
            $this->name,
            $this->email->asString()
        );
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): Email {
        return $this->email;
    }
=======
    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return Email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @return string
     */
    public function __toString() {
        return sprintf(
            '%s <%s>',
            $this->name,
            $this->email
        );
    }
>>>>>>> parent of 31cfa1b1 (p)
}
