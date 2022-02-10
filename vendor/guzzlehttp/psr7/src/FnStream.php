<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Compose stream implementations based on a hash of functions.
 *
 * Allows for easy testing and extension of a provided stream without needing
 * to create a concrete class for a simple extension point.
 */
<<<<<<< HEAD
final class FnStream implements StreamInterface
{
    private const SLOTS = [
        '__toString', 'close', 'detach', 'rewind',
        'getSize', 'tell', 'eof', 'isSeekable', 'seek', 'isWritable', 'write',
        'isReadable', 'read', 'getContents', 'getMetadata'
    ];

    /** @var array<string, callable> */
    private $methods;

    /**
     * @param array<string, callable> $methods Hash of method name to a callable.
=======
class FnStream implements StreamInterface
{
    /** @var array */
    private $methods;

    /** @var array Methods that must be implemented in the given array */
    private static $slots = ['__toString', 'close', 'detach', 'rewind',
        'getSize', 'tell', 'eof', 'isSeekable', 'seek', 'isWritable', 'write',
        'isReadable', 'read', 'getContents', 'getMetadata'];

    /**
     * @param array $methods Hash of method name to a callable.
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct(array $methods)
    {
        $this->methods = $methods;

        // Create the functions on the class
        foreach ($methods as $name => $fn) {
            $this->{'_fn_' . $name} = $fn;
        }
    }

    /**
     * Lazily determine which methods are not implemented.
     *
     * @throws \BadMethodCallException
     */
<<<<<<< HEAD
    public function __get(string $name): void
=======
    public function __get($name)
>>>>>>> parent of 31cfa1b1 (p)
    {
        throw new \BadMethodCallException(str_replace('_fn_', '', $name)
            . '() is not implemented in the FnStream');
    }

    /**
     * The close method is called on the underlying stream only if possible.
     */
    public function __destruct()
    {
        if (isset($this->_fn_close)) {
            call_user_func($this->_fn_close);
        }
    }

    /**
     * An unserialize would allow the __destruct to run when the unserialized value goes out of scope.
<<<<<<< HEAD
     *
     * @throws \LogicException
     */
    public function __wakeup(): void
=======
     * @throws \LogicException
     */
    public function __wakeup()
>>>>>>> parent of 31cfa1b1 (p)
    {
        throw new \LogicException('FnStream should never be unserialized');
    }

    /**
     * Adds custom functionality to an underlying stream by intercepting
     * specific method calls.
     *
<<<<<<< HEAD
     * @param StreamInterface         $stream  Stream to decorate
     * @param array<string, callable> $methods Hash of method name to a closure
=======
     * @param StreamInterface $stream  Stream to decorate
     * @param array           $methods Hash of method name to a closure
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @return FnStream
     */
    public static function decorate(StreamInterface $stream, array $methods)
    {
        // If any of the required methods were not provided, then simply
        // proxy to the decorated stream.
<<<<<<< HEAD
        foreach (array_diff(self::SLOTS, array_keys($methods)) as $diff) {
            /** @var callable $callable */
            $callable = [$stream, $diff];
            $methods[$diff] = $callable;
=======
        foreach (array_diff(self::$slots, array_keys($methods)) as $diff) {
            $methods[$diff] = [$stream, $diff];
>>>>>>> parent of 31cfa1b1 (p)
        }

        return new self($methods);
    }

<<<<<<< HEAD
    public function __toString(): string
    {
        try {
            return call_user_func($this->_fn___toString);
        } catch (\Throwable $e) {
            if (\PHP_VERSION_ID >= 70400) {
                throw $e;
            }
            trigger_error(sprintf('%s::__toString exception: %s', self::class, (string) $e), E_USER_ERROR);
            return '';
        }
    }

    public function close(): void
    {
        call_user_func($this->_fn_close);
=======
    public function __toString()
    {
        return call_user_func($this->_fn___toString);
    }

    public function close()
    {
        return call_user_func($this->_fn_close);
>>>>>>> parent of 31cfa1b1 (p)
    }

    public function detach()
    {
        return call_user_func($this->_fn_detach);
    }

<<<<<<< HEAD
    public function getSize(): ?int
=======
    public function getSize()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_getSize);
    }

<<<<<<< HEAD
    public function tell(): int
=======
    public function tell()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_tell);
    }

<<<<<<< HEAD
    public function eof(): bool
=======
    public function eof()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_eof);
    }

<<<<<<< HEAD
    public function isSeekable(): bool
=======
    public function isSeekable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_isSeekable);
    }

<<<<<<< HEAD
    public function rewind(): void
=======
    public function rewind()
>>>>>>> parent of 31cfa1b1 (p)
    {
        call_user_func($this->_fn_rewind);
    }

<<<<<<< HEAD
    public function seek($offset, $whence = SEEK_SET): void
=======
    public function seek($offset, $whence = SEEK_SET)
>>>>>>> parent of 31cfa1b1 (p)
    {
        call_user_func($this->_fn_seek, $offset, $whence);
    }

<<<<<<< HEAD
    public function isWritable(): bool
=======
    public function isWritable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_isWritable);
    }

<<<<<<< HEAD
    public function write($string): int
=======
    public function write($string)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_write, $string);
    }

<<<<<<< HEAD
    public function isReadable(): bool
=======
    public function isReadable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_isReadable);
    }

<<<<<<< HEAD
    public function read($length): string
=======
    public function read($length)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_read, $length);
    }

<<<<<<< HEAD
    public function getContents(): string
=======
    public function getContents()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return call_user_func($this->_fn_getContents);
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
        return call_user_func($this->_fn_getMetadata, $key);
    }
}
