<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use InvalidArgumentException;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UploadedFileInterface;
use RuntimeException;

class UploadedFile implements UploadedFileInterface
{
<<<<<<< HEAD
    private const ERRORS = [
=======
    /**
     * @var int[]
     */
    private static $errors = [
>>>>>>> parent of 31cfa1b1 (p)
        UPLOAD_ERR_OK,
        UPLOAD_ERR_INI_SIZE,
        UPLOAD_ERR_FORM_SIZE,
        UPLOAD_ERR_PARTIAL,
        UPLOAD_ERR_NO_FILE,
        UPLOAD_ERR_NO_TMP_DIR,
        UPLOAD_ERR_CANT_WRITE,
        UPLOAD_ERR_EXTENSION,
    ];

    /**
<<<<<<< HEAD
     * @var string|null
=======
     * @var string
>>>>>>> parent of 31cfa1b1 (p)
     */
    private $clientFilename;

    /**
<<<<<<< HEAD
     * @var string|null
=======
     * @var string
>>>>>>> parent of 31cfa1b1 (p)
     */
    private $clientMediaType;

    /**
     * @var int
     */
    private $error;

    /**
<<<<<<< HEAD
     * @var string|null
=======
     * @var null|string
>>>>>>> parent of 31cfa1b1 (p)
     */
    private $file;

    /**
     * @var bool
     */
    private $moved = false;

    /**
<<<<<<< HEAD
     * @var int|null
=======
     * @var int
>>>>>>> parent of 31cfa1b1 (p)
     */
    private $size;

    /**
     * @var StreamInterface|null
     */
    private $stream;

    /**
     * @param StreamInterface|string|resource $streamOrFile
<<<<<<< HEAD
     */
    public function __construct(
        $streamOrFile,
        ?int $size,
        int $errorStatus,
        string $clientFilename = null,
        string $clientMediaType = null
    ) {
        $this->setError($errorStatus);
        $this->size = $size;
        $this->clientFilename = $clientFilename;
        $this->clientMediaType = $clientMediaType;
=======
     * @param int $size
     * @param int $errorStatus
     * @param string|null $clientFilename
     * @param string|null $clientMediaType
     */
    public function __construct(
        $streamOrFile,
        $size,
        $errorStatus,
        $clientFilename = null,
        $clientMediaType = null
    ) {
        $this->setError($errorStatus);
        $this->setSize($size);
        $this->setClientFilename($clientFilename);
        $this->setClientMediaType($clientMediaType);
>>>>>>> parent of 31cfa1b1 (p)

        if ($this->isOk()) {
            $this->setStreamOrFile($streamOrFile);
        }
    }

    /**
     * Depending on the value set file or stream variable
     *
<<<<<<< HEAD
     * @param StreamInterface|string|resource $streamOrFile
     *
     * @throws InvalidArgumentException
     */
    private function setStreamOrFile($streamOrFile): void
=======
     * @param mixed $streamOrFile
     *
     * @throws InvalidArgumentException
     */
    private function setStreamOrFile($streamOrFile)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (is_string($streamOrFile)) {
            $this->file = $streamOrFile;
        } elseif (is_resource($streamOrFile)) {
            $this->stream = new Stream($streamOrFile);
        } elseif ($streamOrFile instanceof StreamInterface) {
            $this->stream = $streamOrFile;
        } else {
            throw new InvalidArgumentException(
                'Invalid stream or file provided for UploadedFile'
            );
        }
    }

    /**
<<<<<<< HEAD
     * @throws InvalidArgumentException
     */
    private function setError(int $error): void
    {
        if (false === in_array($error, UploadedFile::ERRORS, true)) {
=======
     * @param int $error
     *
     * @throws InvalidArgumentException
     */
    private function setError($error)
    {
        if (false === is_int($error)) {
            throw new InvalidArgumentException(
                'Upload file error status must be an integer'
            );
        }

        if (false === in_array($error, UploadedFile::$errors)) {
>>>>>>> parent of 31cfa1b1 (p)
            throw new InvalidArgumentException(
                'Invalid error status for UploadedFile'
            );
        }

        $this->error = $error;
    }

<<<<<<< HEAD
    private function isStringNotEmpty($param): bool
=======
    /**
     * @param int $size
     *
     * @throws InvalidArgumentException
     */
    private function setSize($size)
    {
        if (false === is_int($size)) {
            throw new InvalidArgumentException(
                'Upload file size must be an integer'
            );
        }

        $this->size = $size;
    }

    /**
     * @param mixed $param
     * @return boolean
     */
    private function isStringOrNull($param)
    {
        return in_array(gettype($param), ['string', 'NULL']);
    }

    /**
     * @param mixed $param
     * @return boolean
     */
    private function isStringNotEmpty($param)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return is_string($param) && false === empty($param);
    }

    /**
<<<<<<< HEAD
     * Return true if there is no upload error
     */
    private function isOk(): bool
=======
     * @param string|null $clientFilename
     *
     * @throws InvalidArgumentException
     */
    private function setClientFilename($clientFilename)
    {
        if (false === $this->isStringOrNull($clientFilename)) {
            throw new InvalidArgumentException(
                'Upload file client filename must be a string or null'
            );
        }

        $this->clientFilename = $clientFilename;
    }

    /**
     * @param string|null $clientMediaType
     *
     * @throws InvalidArgumentException
     */
    private function setClientMediaType($clientMediaType)
    {
        if (false === $this->isStringOrNull($clientMediaType)) {
            throw new InvalidArgumentException(
                'Upload file client media type must be a string or null'
            );
        }

        $this->clientMediaType = $clientMediaType;
    }

    /**
     * Return true if there is no upload error
     *
     * @return boolean
     */
    private function isOk()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->error === UPLOAD_ERR_OK;
    }

<<<<<<< HEAD
    public function isMoved(): bool
=======
    /**
     * @return boolean
     */
    public function isMoved()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->moved;
    }

    /**
     * @throws RuntimeException if is moved or not ok
     */
<<<<<<< HEAD
    private function validateActive(): void
=======
    private function validateActive()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (false === $this->isOk()) {
            throw new RuntimeException('Cannot retrieve stream due to upload error');
        }

        if ($this->isMoved()) {
            throw new RuntimeException('Cannot retrieve stream after it has already been moved');
        }
    }

<<<<<<< HEAD
    public function getStream(): StreamInterface
=======
    /**
     * {@inheritdoc}
     *
     * @throws RuntimeException if the upload was not successful.
     */
    public function getStream()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->validateActive();

        if ($this->stream instanceof StreamInterface) {
            return $this->stream;
        }

<<<<<<< HEAD
        /** @var string $file */
        $file = $this->file;

        return new LazyOpenStream($file, 'r+');
    }

    public function moveTo($targetPath): void
=======
        return new LazyOpenStream($this->file, 'r+');
    }

    /**
     * {@inheritdoc}
     *
     * @see http://php.net/is_uploaded_file
     * @see http://php.net/move_uploaded_file
     *
     * @param string $targetPath Path to which to move the uploaded file.
     *
     * @throws RuntimeException if the upload was not successful.
     * @throws InvalidArgumentException if the $path specified is invalid.
     * @throws RuntimeException on any error during the move operation, or on
     *     the second or subsequent call to the method.
     */
    public function moveTo($targetPath)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->validateActive();

        if (false === $this->isStringNotEmpty($targetPath)) {
            throw new InvalidArgumentException(
                'Invalid path provided for move operation; must be a non-empty string'
            );
        }

        if ($this->file) {
<<<<<<< HEAD
            $this->moved = PHP_SAPI === 'cli'
=======
            $this->moved = php_sapi_name() == 'cli'
>>>>>>> parent of 31cfa1b1 (p)
                ? rename($this->file, $targetPath)
                : move_uploaded_file($this->file, $targetPath);
        } else {
            Utils::copyToStream(
                $this->getStream(),
                new LazyOpenStream($targetPath, 'w')
            );

            $this->moved = true;
        }

        if (false === $this->moved) {
            throw new RuntimeException(
                sprintf('Uploaded file could not be moved to %s', $targetPath)
            );
        }
    }

<<<<<<< HEAD
    public function getSize(): ?int
=======
    /**
     * {@inheritdoc}
     *
     * @return int|null The file size in bytes or null if unknown.
     */
    public function getSize()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->size;
    }

<<<<<<< HEAD
    public function getError(): int
=======
    /**
     * {@inheritdoc}
     *
     * @see http://php.net/manual/en/features.file-upload.errors.php
     * @return int One of PHP's UPLOAD_ERR_XXX constants.
     */
    public function getError()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->error;
    }

<<<<<<< HEAD
    public function getClientFilename(): ?string
=======
    /**
     * {@inheritdoc}
     *
     * @return string|null The filename sent by the client or null if none
     *     was provided.
     */
    public function getClientFilename()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->clientFilename;
    }

<<<<<<< HEAD
    public function getClientMediaType(): ?string
=======
    /**
     * {@inheritdoc}
     */
    public function getClientMediaType()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->clientMediaType;
    }
}
