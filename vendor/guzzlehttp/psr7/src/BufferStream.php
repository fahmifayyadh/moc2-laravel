<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Provides a buffer stream that can be written to to fill a buffer, and read
 * from to remove bytes from the buffer.
 *
 * This stream returns a "hwm" metadata value that tells upstream consumers
 * what the configured high water mark of the stream is, or the maximum
 * preferred size of the buffer.
 */
<<<<<<< HEAD
final class BufferStream implements StreamInterface
{
    /** @var int */
    private $hwm;

    /** @var string */
=======
class BufferStream implements StreamInterface
{
    private $hwm;
>>>>>>> parent of 31cfa1b1 (p)
    private $buffer = '';

    /**
     * @param int $hwm High water mark, representing the preferred maximum
     *                 buffer size. If the size of the buffer exceeds the high
     *                 water mark, then calls to write will continue to succeed
<<<<<<< HEAD
     *                 but will return 0 to inform writers to slow down
     *                 until the buffer has been drained by reading from it.
     */
    public function __construct(int $hwm = 16384)
=======
     *                 but will return false to inform writers to slow down
     *                 until the buffer has been drained by reading from it.
     */
    public function __construct($hwm = 16384)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->hwm = $hwm;
    }

<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->getContents();
    }

<<<<<<< HEAD
    public function getContents(): string
=======
    public function getContents()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $buffer = $this->buffer;
        $this->buffer = '';

        return $buffer;
    }

<<<<<<< HEAD
    public function close(): void
=======
    public function close()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->buffer = '';
    }

    public function detach()
    {
        $this->close();

        return null;
    }

<<<<<<< HEAD
    public function getSize(): ?int
=======
    public function getSize()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return strlen($this->buffer);
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
    public function isWritable(): bool
=======
    public function isWritable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return true;
    }

<<<<<<< HEAD
    public function isSeekable(): bool
=======
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
        throw new \RuntimeException('Cannot seek a BufferStream');
    }

<<<<<<< HEAD
    public function eof(): bool
=======
    public function eof()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return strlen($this->buffer) === 0;
    }

<<<<<<< HEAD
    public function tell(): int
=======
    public function tell()
>>>>>>> parent of 31cfa1b1 (p)
    {
        throw new \RuntimeException('Cannot determine the position of a BufferStream');
    }

    /**
     * Reads data from the buffer.
     */
<<<<<<< HEAD
    public function read($length): string
=======
    public function read($length)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $currentLength = strlen($this->buffer);

        if ($length >= $currentLength) {
            // No need to slice the buffer because we don't have enough data.
            $result = $this->buffer;
            $this->buffer = '';
        } else {
            // Slice up the result to provide a subset of the buffer.
            $result = substr($this->buffer, 0, $length);
            $this->buffer = substr($this->buffer, $length);
        }

        return $result;
    }

    /**
     * Writes data to the buffer.
     */
<<<<<<< HEAD
    public function write($string): int
    {
        $this->buffer .= $string;

        if (strlen($this->buffer) >= $this->hwm) {
            return 0;
=======
    public function write($string)
    {
        $this->buffer .= $string;

        // TODO: What should happen here?
        if (strlen($this->buffer) >= $this->hwm) {
            return false;
>>>>>>> parent of 31cfa1b1 (p)
        }

        return strlen($string);
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     *
     * @return mixed
     */
    public function getMetadata($key = null)
    {
        if ($key === 'hwm') {
=======
    public function getMetadata($key = null)
    {
        if ($key == 'hwm') {
>>>>>>> parent of 31cfa1b1 (p)
            return $this->hwm;
        }

        return $key ? null : [];
    }
}
