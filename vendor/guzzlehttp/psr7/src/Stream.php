<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * PHP stream implementation.
<<<<<<< HEAD
=======
 *
 * @var $stream
>>>>>>> parent of 31cfa1b1 (p)
 */
class Stream implements StreamInterface
{
    /**
<<<<<<< HEAD
     * @see http://php.net/manual/function.fopen.php
     * @see http://php.net/manual/en/function.gzopen.php
     */
    private const READABLE_MODES = '/r|a\+|ab\+|w\+|wb\+|x\+|xb\+|c\+|cb\+/';
    private const WRITABLE_MODES = '/a|w|r\+|rb\+|rw|x|c/';

    /** @var resource */
    private $stream;
    /** @var int|null */
    private $size;
    /** @var bool */
    private $seekable;
    /** @var bool */
    private $readable;
    /** @var bool */
    private $writable;
    /** @var string|null */
    private $uri;
    /** @var mixed[] */
=======
     * Resource modes.
     *
     * @var string
     *
     * @see http://php.net/manual/function.fopen.php
     * @see http://php.net/manual/en/function.gzopen.php
     */
    const READABLE_MODES = '/r|a\+|ab\+|w\+|wb\+|x\+|xb\+|c\+|cb\+/';
    const WRITABLE_MODES = '/a|w|r\+|rb\+|rw|x|c/';

    private $stream;
    private $size;
    private $seekable;
    private $readable;
    private $writable;
    private $uri;
>>>>>>> parent of 31cfa1b1 (p)
    private $customMetadata;

    /**
     * This constructor accepts an associative array of options.
     *
     * - size: (int) If a read stream would otherwise have an indeterminate
     *   size, but the size is known due to foreknowledge, then you can
     *   provide that size, in bytes.
     * - metadata: (array) Any additional metadata to return when the metadata
     *   of the stream is accessed.
     *
<<<<<<< HEAD
     * @param resource                            $stream  Stream resource to wrap.
     * @param array{size?: int, metadata?: array} $options Associative array of options.
     *
     * @throws \InvalidArgumentException if the stream is not a stream resource
     */
    public function __construct($stream, array $options = [])
=======
     * @param resource $stream  Stream resource to wrap.
     * @param array    $options Associative array of options.
     *
     * @throws \InvalidArgumentException if the stream is not a stream resource
     */
    public function __construct($stream, $options = [])
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!is_resource($stream)) {
            throw new \InvalidArgumentException('Stream must be a resource');
        }

        if (isset($options['size'])) {
            $this->size = $options['size'];
        }

<<<<<<< HEAD
        $this->customMetadata = $options['metadata'] ?? [];
=======
        $this->customMetadata = isset($options['metadata'])
            ? $options['metadata']
            : [];

>>>>>>> parent of 31cfa1b1 (p)
        $this->stream = $stream;
        $meta = stream_get_meta_data($this->stream);
        $this->seekable = $meta['seekable'];
        $this->readable = (bool)preg_match(self::READABLE_MODES, $meta['mode']);
        $this->writable = (bool)preg_match(self::WRITABLE_MODES, $meta['mode']);
        $this->uri = $this->getMetadata('uri');
    }

    /**
     * Closes the stream when the destructed
     */
    public function __destruct()
    {
        $this->close();
    }

<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString()
>>>>>>> parent of 31cfa1b1 (p)
    {
        try {
            if ($this->isSeekable()) {
                $this->seek(0);
            }
            return $this->getContents();
<<<<<<< HEAD
        } catch (\Throwable $e) {
            if (\PHP_VERSION_ID >= 70400) {
                throw $e;
            }
            trigger_error(sprintf('%s::__toString exception: %s', self::class, (string) $e), E_USER_ERROR);
=======
        } catch (\Exception $e) {
>>>>>>> parent of 31cfa1b1 (p)
            return '';
        }
    }

<<<<<<< HEAD
    public function getContents(): string
=======
    public function getContents()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!isset($this->stream)) {
            throw new \RuntimeException('Stream is detached');
        }

        $contents = stream_get_contents($this->stream);

        if ($contents === false) {
            throw new \RuntimeException('Unable to read stream contents');
        }

        return $contents;
    }

<<<<<<< HEAD
    public function close(): void
=======
    public function close()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (isset($this->stream)) {
            if (is_resource($this->stream)) {
                fclose($this->stream);
            }
            $this->detach();
        }
    }

    public function detach()
    {
        if (!isset($this->stream)) {
            return null;
        }

        $result = $this->stream;
        unset($this->stream);
        $this->size = $this->uri = null;
        $this->readable = $this->writable = $this->seekable = false;

        return $result;
    }

<<<<<<< HEAD
    public function getSize(): ?int
=======
    public function getSize()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($this->size !== null) {
            return $this->size;
        }

        if (!isset($this->stream)) {
            return null;
        }

        // Clear the stat cache if the stream has a URI
        if ($this->uri) {
            clearstatcache(true, $this->uri);
        }

        $stats = fstat($this->stream);
<<<<<<< HEAD
        if (is_array($stats) && isset($stats['size'])) {
=======
        if (isset($stats['size'])) {
>>>>>>> parent of 31cfa1b1 (p)
            $this->size = $stats['size'];
            return $this->size;
        }

        return null;
    }

<<<<<<< HEAD
    public function isReadable(): bool
=======
    public function isReadable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->readable;
    }

<<<<<<< HEAD
    public function isWritable(): bool
=======
    public function isWritable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->writable;
    }

<<<<<<< HEAD
    public function isSeekable(): bool
=======
    public function isSeekable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->seekable;
    }

<<<<<<< HEAD
    public function eof(): bool
=======
    public function eof()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!isset($this->stream)) {
            throw new \RuntimeException('Stream is detached');
        }

        return feof($this->stream);
    }

<<<<<<< HEAD
    public function tell(): int
=======
    public function tell()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!isset($this->stream)) {
            throw new \RuntimeException('Stream is detached');
        }

        $result = ftell($this->stream);

        if ($result === false) {
            throw new \RuntimeException('Unable to determine stream position');
        }

        return $result;
    }

<<<<<<< HEAD
    public function rewind(): void
=======
    public function rewind()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->seek(0);
    }

<<<<<<< HEAD
    public function seek($offset, $whence = SEEK_SET): void
=======
    public function seek($offset, $whence = SEEK_SET)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $whence = (int) $whence;

        if (!isset($this->stream)) {
            throw new \RuntimeException('Stream is detached');
        }
        if (!$this->seekable) {
            throw new \RuntimeException('Stream is not seekable');
        }
        if (fseek($this->stream, $offset, $whence) === -1) {
            throw new \RuntimeException('Unable to seek to stream position '
                . $offset . ' with whence ' . var_export($whence, true));
        }
    }

<<<<<<< HEAD
    public function read($length): string
=======
    public function read($length)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!isset($this->stream)) {
            throw new \RuntimeException('Stream is detached');
        }
        if (!$this->readable) {
            throw new \RuntimeException('Cannot read from non-readable stream');
        }
        if ($length < 0) {
            throw new \RuntimeException('Length parameter cannot be negative');
        }

        if (0 === $length) {
            return '';
        }

        $string = fread($this->stream, $length);
        if (false === $string) {
            throw new \RuntimeException('Unable to read from stream');
        }

        return $string;
    }

<<<<<<< HEAD
    public function write($string): int
=======
    public function write($string)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!isset($this->stream)) {
            throw new \RuntimeException('Stream is detached');
        }
        if (!$this->writable) {
            throw new \RuntimeException('Cannot write to a non-writable stream');
        }

        // We can't know the size after writing anything
        $this->size = null;
        $result = fwrite($this->stream, $string);

        if ($result === false) {
            throw new \RuntimeException('Unable to write to stream');
        }

        return $result;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     *
     * @return mixed
     */
=======
>>>>>>> parent of 31cfa1b1 (p)
    public function getMetadata($key = null)
    {
        if (!isset($this->stream)) {
            return $key ? null : [];
        } elseif (!$key) {
            return $this->customMetadata + stream_get_meta_data($this->stream);
        } elseif (isset($this->customMetadata[$key])) {
            return $this->customMetadata[$key];
        }

        $meta = stream_get_meta_data($this->stream);

<<<<<<< HEAD
        return $meta[$key] ?? null;
=======
        return isset($meta[$key]) ? $meta[$key] : null;
>>>>>>> parent of 31cfa1b1 (p)
    }
}
