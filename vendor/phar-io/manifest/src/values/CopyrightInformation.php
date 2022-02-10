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

class CopyrightInformation {
    /** @var AuthorCollection */
    private $authors;

    /** @var License */
=======

namespace PharIo\Manifest;

class CopyrightInformation {
    /**
     * @var AuthorCollection
     */
    private $authors;

    /**
     * @var License
     */
>>>>>>> parent of 31cfa1b1 (p)
    private $license;

    public function __construct(AuthorCollection $authors, License $license) {
        $this->authors = $authors;
        $this->license = $license;
    }

<<<<<<< HEAD
    public function getAuthors(): AuthorCollection {
        return $this->authors;
    }

    public function getLicense(): License {
=======
    /**
     * @return AuthorCollection
     */
    public function getAuthors() {
        return $this->authors;
    }

    /**
     * @return License
     */
    public function getLicense() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->license;
    }
}
