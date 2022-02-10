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

class AuthorCollection implements \Countable, \IteratorAggregate {
    /** @var Author[] */
    private $authors = [];

    public function add(Author $author): void {
=======

namespace PharIo\Manifest;

class AuthorCollection implements \Countable, \IteratorAggregate {
    /**
     * @var Author[]
     */
    private $authors = [];

    public function add(Author $author) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->authors[] = $author;
    }

    /**
     * @return Author[]
     */
<<<<<<< HEAD
    public function getAuthors(): array {
        return $this->authors;
    }

    public function count(): int {
        return \count($this->authors);
    }

    public function getIterator(): AuthorCollectionIterator {
=======
    public function getAuthors() {
        return $this->authors;
    }

    /**
     * @return int
     */
    public function count() {
        return count($this->authors);
    }

    /**
     * @return AuthorCollectionIterator
     */
    public function getIterator() {
>>>>>>> parent of 31cfa1b1 (p)
        return new AuthorCollectionIterator($this);
    }
}
