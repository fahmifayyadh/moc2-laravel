<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Reads from multiple streams, one after the other.
 *
 * This is a read-only stream decorator.
 */
<<<<<<< HEAD
final class AppendStream implements StreamInterface
=======
class AppendStream implements StreamInterface
>>>>>>> parent of 31cfa1b1 (p)
{
    /** @var StreamInterface[] Streams being decorated */
    private $streams = [];

<<<<<<< HEAD
    /** @var bool */
    private $seekable = true;

    /** @var int */
    private $current = 0;

    /** @var int */
=======
    private $seekable = true;
    private $current = 0;
>>>>>>> parent of 31cfa1b1 (p)
    private $pos = 0;

    /**
     * @param StreamInterface[] $streams Streams to decorate. Each stream must
     *                                   be readable.
     */
    public function __construct(array $streams = [])
    {
        foreach ($streams as $stream) {
            $this->addStream($stream);
        }
    }

<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString()
>>>>>>> parent of 31cfa1b1 (p)
    {
        try {
            $this->rewind();
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

    /**
     * Add a stream to the AppendStream
     *
     * @param StreamInterface $stream Stream to append. Must be readable.
     *
     * @throws \InvalidArgumentException if the stream is not readable
     */
<<<<<<< HEAD
    public function addStream(StreamInterface $stream): void
=======
    public function addStream(StreamInterface $stream)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!$stream->isReadable()) {
            throw new \InvalidArgumentException('Each stream must be readable');
        }

        // The stream is only seekable if all streams are seekable
        if (!$stream->isSeekable()) {
            $this->seekable = false;
        }

        $this->streams[] = $stream;
    }

<<<<<<< HEAD
    public function getContents(): string
=======
    public function getContents()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return Utils::copyToString($this);
    }

    /**
     * Closes each attached stream.
<<<<<<< HEAD
     */
    public function close(): void
=======
     *
     * {@inheritdoc}
     */
    public function close()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->pos = $this->current = 0;
        $this->seekable = true;

        foreach ($this->streams as $stream) {
            $stream->close();
        }

        $this->streams = [];
    }

    /**
     * Detaches each attached stream.
     *
     * Returns null as it's not clear which underlying stream resource to return.
<<<<<<< HEAD
=======
     *
     * {@inheritdoc}
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function detach()
    {
        $this->pos = $this->current = 0;
        $this->seekable = true;

        foreach ($this->streams as $stream) {
            $stream->detach();
        }

        $this->streams = [];

        return null;
    }

<<<<<<< HEAD
    public function tell(): int
=======
    public function tell()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->pos;
    }

    /**
     * Tries to calculate the size by adding the size of each stream.
     *
     * If any of the streams do not return a valid number, then the size of the
     * append stream cannot be determined and null is returned.
<<<<<<< HEAD
     */
    public function getSize(): ?int
=======
     *
     * {@inheritdoc}
     */
    public function getSize()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $size = 0;

        foreach ($this->streams as $stream) {
            $s = $stream->getSize();
            if ($s === null) {
                return null;
            }
            $size += $s;
        }

        return $size;
    }

<<<<<<< HEAD
    public function eof(): bool
=======
    public function eof()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return !$this->streams ||
            ($this->current >= count($this->streams) - 1 &&
             $this->streams[$this->current]->eof());
    }

<<<<<<< HEAD
    public function rewind(): void
=======
    public function rewind()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->seek(0);
    }

    /**
     * Attempts to seek to the given position. Only supports SEEK_SET.
<<<<<<< HEAD
     */
    public function seek($offset, $whence = SEEK_SET): void
=======
     *
     * {@inheritdoc}
     */
    public function seek($offset, $whence = SEEK_SET)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!$this->seekable) {
            throw new \RuntimeException('This AppendStream is not seekable');
        } elseif ($whence !== SEEK_SET) {
            throw new \RuntimeException('The AppendStream can only seek with SEEK_SET');
        }

        $this->pos = $this->current = 0;

        // Rewind each stream
        foreach ($this->streams as $i => $stream) {
            try {
                $stream->rewind();
            } catch (\Exception $e) {
                throw new \RuntimeException('Unable to seek stream '
                    . $i . ' of the AppendStream', 0, $e);
            }
        }

        // Seek to the actual position by reading from each stream
        while ($this->pos < $offset && !$this->eof()) {
            $result = $this->read(min(8096, $offset - $this->pos));
            if ($result === '') {
                break;
            }
        }
    }

    /**
     * Reads from all of the appended streams until the length is met or EOF.
<<<<<<< HEAD
     */
    public function read($length): string
=======
     *
     * {@inheritdoc}
     */
    public function read($length)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $buffer = '';
        $total = count($this->streams) - 1;
        $remaining = $length;
        $progressToNext = false;

        while ($remaining > 0) {

            // Progress to the next stream if needed.
            if ($progressToNext || $this->streams[$this->current]->eof()) {
                $progressToNext = false;
                if ($this->current === $total) {
                    break;
                }
                $this->current++;
            }

            $result = $this->streams[$this->current]->read($remaining);

<<<<<<< HEAD
            if ($result === '') {
=======
            // Using a loose comparison here to match on '', false, and null
            if ($result == null) {
>>>>>>> parent of 31cfa1b1 (p)
                $progressToNext = true;
                continue;
            }

            $buffer .= $result;
            $remaining = $length - strlen($buffer);
        }

        $this->pos += strlen($buffer);

        return $buffer;
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
        return false;
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
    public function write($string): int
=======
    public function write($string)
>>>>>>> parent of 31cfa1b1 (p)
    {
        throw new \RuntimeException('Cannot write to an AppendStream');
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
        return $key ? null : [];
    }
}
