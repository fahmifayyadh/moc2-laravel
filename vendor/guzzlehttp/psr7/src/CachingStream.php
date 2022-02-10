<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Stream decorator that can cache previously read bytes from a sequentially
 * read stream.
 */
<<<<<<< HEAD
final class CachingStream implements StreamInterface
=======
class CachingStream implements StreamInterface
>>>>>>> parent of 31cfa1b1 (p)
{
    use StreamDecoratorTrait;

    /** @var StreamInterface Stream being wrapped */
    private $remoteStream;

    /** @var int Number of bytes to skip reading due to a write on the buffer */
    private $skipReadBytes = 0;

    /**
     * We will treat the buffer object as the body of the stream
     *
<<<<<<< HEAD
     * @param StreamInterface $stream Stream to cache. The cursor is assumed to be at the beginning of the stream.
=======
     * @param StreamInterface $stream Stream to cache
>>>>>>> parent of 31cfa1b1 (p)
     * @param StreamInterface $target Optionally specify where data is cached
     */
    public function __construct(
        StreamInterface $stream,
        StreamInterface $target = null
    ) {
        $this->remoteStream = $stream;
<<<<<<< HEAD
        $this->stream = $target ?: new Stream(Utils::tryFopen('php://temp', 'r+'));
    }

    public function getSize(): ?int
    {
        $remoteSize = $this->remoteStream->getSize();

        if (null === $remoteSize) {
            return null;
        }

        return max($this->stream->getSize(), $remoteSize);
    }

    public function rewind(): void
=======
        $this->stream = $target ?: new Stream(fopen('php://temp', 'r+'));
    }

    public function getSize()
    {
        return max($this->stream->getSize(), $this->remoteStream->getSize());
    }

    public function rewind()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->seek(0);
    }

<<<<<<< HEAD
    public function seek($offset, $whence = SEEK_SET): void
    {
        if ($whence === SEEK_SET) {
            $byte = $offset;
        } elseif ($whence === SEEK_CUR) {
            $byte = $offset + $this->tell();
        } elseif ($whence === SEEK_END) {
=======
    public function seek($offset, $whence = SEEK_SET)
    {
        if ($whence == SEEK_SET) {
            $byte = $offset;
        } elseif ($whence == SEEK_CUR) {
            $byte = $offset + $this->tell();
        } elseif ($whence == SEEK_END) {
>>>>>>> parent of 31cfa1b1 (p)
            $size = $this->remoteStream->getSize();
            if ($size === null) {
                $size = $this->cacheEntireStream();
            }
            $byte = $size + $offset;
        } else {
            throw new \InvalidArgumentException('Invalid whence');
        }

        $diff = $byte - $this->stream->getSize();

        if ($diff > 0) {
            // Read the remoteStream until we have read in at least the amount
            // of bytes requested, or we reach the end of the file.
            while ($diff > 0 && !$this->remoteStream->eof()) {
                $this->read($diff);
                $diff = $byte - $this->stream->getSize();
            }
        } else {
            // We can just do a normal seek since we've already seen this byte.
            $this->stream->seek($byte);
        }
    }

<<<<<<< HEAD
    public function read($length): string
=======
    public function read($length)
>>>>>>> parent of 31cfa1b1 (p)
    {
        // Perform a regular read on any previously read data from the buffer
        $data = $this->stream->read($length);
        $remaining = $length - strlen($data);

        // More data was requested so read from the remote stream
        if ($remaining) {
            // If data was written to the buffer in a position that would have
            // been filled from the remote stream, then we must skip bytes on
            // the remote stream to emulate overwriting bytes from that
            // position. This mimics the behavior of other PHP stream wrappers.
            $remoteData = $this->remoteStream->read(
                $remaining + $this->skipReadBytes
            );

            if ($this->skipReadBytes) {
                $len = strlen($remoteData);
                $remoteData = substr($remoteData, $this->skipReadBytes);
                $this->skipReadBytes = max(0, $this->skipReadBytes - $len);
            }

            $data .= $remoteData;
            $this->stream->write($remoteData);
        }

        return $data;
    }

<<<<<<< HEAD
    public function write($string): int
=======
    public function write($string)
>>>>>>> parent of 31cfa1b1 (p)
    {
        // When appending to the end of the currently read stream, you'll want
        // to skip bytes from being read from the remote stream to emulate
        // other stream wrappers. Basically replacing bytes of data of a fixed
        // length.
        $overflow = (strlen($string) + $this->tell()) - $this->remoteStream->tell();
        if ($overflow > 0) {
            $this->skipReadBytes += $overflow;
        }

        return $this->stream->write($string);
    }

<<<<<<< HEAD
    public function eof(): bool
=======
    public function eof()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->eof() && $this->remoteStream->eof();
    }

    /**
     * Close both the remote stream and buffer stream
     */
<<<<<<< HEAD
    public function close(): void
    {
        $this->remoteStream->close();
        $this->stream->close();
    }

    private function cacheEntireStream(): int
=======
    public function close()
    {
        $this->remoteStream->close() && $this->stream->close();
    }

    private function cacheEntireStream()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $target = new FnStream(['write' => 'strlen']);
        Utils::copyToStream($this, $target);

        return $this->tell();
    }
}
