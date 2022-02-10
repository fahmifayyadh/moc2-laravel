<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Stream decorator trait
<<<<<<< HEAD
 *
 * @property StreamInterface $stream
=======
 * @property StreamInterface stream
>>>>>>> parent of 31cfa1b1 (p)
 */
trait StreamDecoratorTrait
{
    /**
     * @param StreamInterface $stream Stream to decorate
     */
    public function __construct(StreamInterface $stream)
    {
        $this->stream = $stream;
    }

    /**
     * Magic method used to create a new stream if streams are not added in
     * the constructor of a decorator (e.g., LazyOpenStream).
     *
<<<<<<< HEAD
     * @return StreamInterface
     */
    public function __get(string $name)
    {
        if ($name === 'stream') {
=======
     * @param string $name Name of the property (allows "stream" only).
     *
     * @return StreamInterface
     */
    public function __get($name)
    {
        if ($name == 'stream') {
>>>>>>> parent of 31cfa1b1 (p)
            $this->stream = $this->createStream();
            return $this->stream;
        }

        throw new \UnexpectedValueException("$name not found on class");
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
            // Really, PHP? https://bugs.php.net/bug.php?id=53648
            trigger_error('StreamDecorator::__toString exception: '
                . (string) $e, E_USER_ERROR);
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
        return Utils::copyToString($this);
    }

    /**
     * Allow decorators to implement custom methods
     *
<<<<<<< HEAD
     * @return mixed
     */
    public function __call(string $method, array $args)
    {
        /** @var callable $callable */
        $callable = [$this->stream, $method];
        $result = call_user_func_array($callable, $args);
=======
     * @param string $method Missing method name
     * @param array  $args   Method arguments
     *
     * @return mixed
     */
    public function __call($method, array $args)
    {
        $result = call_user_func_array([$this->stream, $method], $args);
>>>>>>> parent of 31cfa1b1 (p)

        // Always return the wrapped object if the result is a return $this
        return $result === $this->stream ? $this : $result;
    }

<<<<<<< HEAD
    public function close(): void
=======
    public function close()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->stream->close();
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
        return $this->stream->getMetadata($key);
    }

    public function detach()
    {
        return $this->stream->detach();
    }

<<<<<<< HEAD
    public function getSize(): ?int
=======
    public function getSize()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->getSize();
    }

<<<<<<< HEAD
    public function eof(): bool
=======
    public function eof()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->eof();
    }

<<<<<<< HEAD
    public function tell(): int
=======
    public function tell()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->tell();
    }

<<<<<<< HEAD
    public function isReadable(): bool
=======
    public function isReadable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->isReadable();
    }

<<<<<<< HEAD
    public function isWritable(): bool
=======
    public function isWritable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->isWritable();
    }

<<<<<<< HEAD
    public function isSeekable(): bool
=======
    public function isSeekable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->isSeekable();
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
        $this->stream->seek($offset, $whence);
    }

<<<<<<< HEAD
    public function read($length): string
=======
    public function read($length)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->read($length);
    }

<<<<<<< HEAD
    public function write($string): int
=======
    public function write($string)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->write($string);
    }

    /**
     * Implement in subclasses to dynamically create streams when requested.
     *
<<<<<<< HEAD
     * @throws \BadMethodCallException
     */
    protected function createStream(): StreamInterface
=======
     * @return StreamInterface
     *
     * @throws \BadMethodCallException
     */
    protected function createStream()
>>>>>>> parent of 31cfa1b1 (p)
    {
        throw new \BadMethodCallException('Not implemented');
    }
}
