<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Provides a read only stream that pumps data from a PHP callable.
 *
 * When invoking the provided callable, the PumpStream will pass the amount of
 * data requested to read to the callable. The callable can choose to ignore
 * this value and return fewer or more bytes than requested. Any extra data
 * returned by the provided callable is buffered internally until drained using
 * the read() function of the PumpStream. The provided callable MUST return
 * false when there is no more data to read.
 */
<<<<<<< HEAD
final class PumpStream implements StreamInterface
{
    /** @var callable|null */
    private $source;

    /** @var int|null */
=======
class PumpStream implements StreamInterface
{
    /** @var callable */
    private $source;

    /** @var int */
>>>>>>> parent of 31cfa1b1 (p)
    private $size;

    /** @var int */
    private $tellPos = 0;

    /** @var array */
    private $metadata;

    /** @var BufferStream */
    private $buffer;

    /**
<<<<<<< HEAD
     * @param callable(int): (string|null|false)  $source  Source of the stream data. The callable MAY
     *                                                     accept an integer argument used to control the
     *                                                     amount of data to return. The callable MUST
     *                                                     return a string when called, or false|null on error
     *                                                     or EOF.
     * @param array{size?: int, metadata?: array} $options Stream options:
     *                                                     - metadata: Hash of metadata to use with stream.
     *                                                     - size: Size of the stream, if known.
=======
     * @param callable $source Source of the stream data. The callable MAY
     *                         accept an integer argument used to control the
     *                         amount of data to return. The callable MUST
     *                         return a string when called, or false on error
     *                         or EOF.
     * @param array $options   Stream options:
     *                         - metadata: Hash of metadata to use with stream.
     *                         - size: Size of the stream, if known.
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct(callable $source, array $options = [])
    {
        $this->source = $source;
<<<<<<< HEAD
        $this->size = $options['size'] ?? null;
        $this->metadata = $options['metadata'] ?? [];
        $this->buffer = new BufferStream();
    }

    public function __toString(): string
    {
        try {
            return Utils::copyToString($this);
        } catch (\Throwable $e) {
            if (\PHP_VERSION_ID >= 70400) {
                throw $e;
            }
            trigger_error(sprintf('%s::__toString exception: %s', self::class, (string) $e), E_USER_ERROR);
=======
        $this->size = isset($options['size']) ? $options['size'] : null;
        $this->metadata = isset($options['metadata']) ? $options['metadata'] : [];
        $this->buffer = new BufferStream();
    }

    public function __toString()
    {
        try {
            return Utils::copyToString($this);
        } catch (\Exception $e) {
>>>>>>> parent of 31cfa1b1 (p)
            return '';
        }
    }

<<<<<<< HEAD
    public function close(): void
=======
    public function close()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->detach();
    }

    public function detach()
    {
<<<<<<< HEAD
        $this->tellPos = 0;
=======
        $this->tellPos = false;
>>>>>>> parent of 31cfa1b1 (p)
        $this->source = null;

        return null;
    }

<<<<<<< HEAD
    public function getSize(): ?int
=======
    public function getSize()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->size;
    }

<<<<<<< HEAD
    public function tell(): int
=======
    public function tell()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->tellPos;
    }

<<<<<<< HEAD
    public function eof(): bool
    {
        return $this->source === null;
    }

    public function isSeekable(): bool
=======
    public function eof()
    {
        return !$this->source;
    }

    public function isSeekable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return false;
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
        throw new \RuntimeException('Cannot seek a PumpStream');
    }

<<<<<<< HEAD
    public function isWritable(): bool
=======
    public function isWritable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return false;
    }

<<<<<<< HEAD
    public function write($string): int
=======
    public function write($string)
>>>>>>> parent of 31cfa1b1 (p)
    {
        throw new \RuntimeException('Cannot write to a PumpStream');
    }

<<<<<<< HEAD
    public function isReadable(): bool
=======
    public function isReadable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return true;
    }

<<<<<<< HEAD
    public function read($length): string
=======
    public function read($length)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $data = $this->buffer->read($length);
        $readLen = strlen($data);
        $this->tellPos += $readLen;
        $remaining = $length - $readLen;

        if ($remaining) {
            $this->pump($remaining);
            $data .= $this->buffer->read($remaining);
            $this->tellPos += strlen($data) - $readLen;
        }

        return $data;
    }

<<<<<<< HEAD
    public function getContents(): string
=======
    public function getContents()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $result = '';
        while (!$this->eof()) {
            $result .= $this->read(1000000);
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
        if (!$key) {
            return $this->metadata;
        }

<<<<<<< HEAD
        return $this->metadata[$key] ?? null;
    }

    private function pump(int $length): void
=======
        return isset($this->metadata[$key]) ? $this->metadata[$key] : null;
    }

    private function pump($length)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($this->source) {
            do {
                $data = call_user_func($this->source, $length);
                if ($data === false || $data === null) {
                    $this->source = null;
                    return;
                }
                $this->buffer->write($data);
                $length -= strlen($data);
            } while ($length > 0);
        }
    }
}
