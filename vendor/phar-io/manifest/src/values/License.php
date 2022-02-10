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

class License {
    /** @var string */
    private $name;

    /** @var Url */
    private $url;

    public function __construct(string $name, Url $url) {
=======

namespace PharIo\Manifest;

class License {
    /**
     * @var string
     */
    private $name;

    /**
     * @var Url
     */
    private $url;

    public function __construct($name, Url $url) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->name = $name;
        $this->url  = $url;
    }

<<<<<<< HEAD
    public function getName(): string {
        return $this->name;
    }

    public function getUrl(): Url {
=======
    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return Url
     */
    public function getUrl() {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->url;
    }
}
