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

class ManifestLoader {
    public static function fromFile(string $filename): Manifest {
=======

namespace PharIo\Manifest;

class ManifestLoader {
    /**
     * @param string $filename
     *
     * @return Manifest
     *
     * @throws ManifestLoaderException
     */
    public static function fromFile($filename) {
>>>>>>> parent of 31cfa1b1 (p)
        try {
            return (new ManifestDocumentMapper())->map(
                ManifestDocument::fromFile($filename)
            );
        } catch (Exception $e) {
            throw new ManifestLoaderException(
<<<<<<< HEAD
                \sprintf('Loading %s failed.', $filename),
                (int)$e->getCode(),
=======
                sprintf('Loading %s failed.', $filename),
                $e->getCode(),
>>>>>>> parent of 31cfa1b1 (p)
                $e
            );
        }
    }

<<<<<<< HEAD
    public static function fromPhar(string $filename): Manifest {
        return self::fromFile('phar://' . $filename . '/manifest.xml');
    }

    public static function fromString(string $manifest): Manifest {
=======
    /**
     * @param string $filename
     *
     * @return Manifest
     *
     * @throws ManifestLoaderException
     */
    public static function fromPhar($filename) {
        return self::fromFile('phar://' . $filename . '/manifest.xml');
    }

    /**
     * @param string $manifest
     *
     * @return Manifest
     *
     * @throws ManifestLoaderException
     */
    public static function fromString($manifest) {
>>>>>>> parent of 31cfa1b1 (p)
        try {
            return (new ManifestDocumentMapper())->map(
                ManifestDocument::fromString($manifest)
            );
        } catch (Exception $e) {
            throw new ManifestLoaderException(
                'Processing string failed',
<<<<<<< HEAD
                (int)$e->getCode(),
=======
                $e->getCode(),
>>>>>>> parent of 31cfa1b1 (p)
                $e
            );
        }
    }
}
