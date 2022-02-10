<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Converts Guzzle streams into PHP stream resources.
<<<<<<< HEAD
 *
 * @see https://www.php.net/streamwrapper
 */
final class StreamWrapper
=======
 */
class StreamWrapper
>>>>>>> parent of 31cfa1b1 (p)
{
    /** @var resource */
    public $context;

    /** @var StreamInterface */
    private $stream;

    /** @var string r, r+, or w */
    private $mode;

    /**
     * Returns a resource representing the stream.
     *
     * @param StreamInterface $stream The stream to get a resource for
     *
     * @return resource
     *
     * @throws \InvalidArgumentException if stream is not readable or writable
     */
    public static function getResource(StreamInterface $stream)
    {
        self::register();

        if ($stream->isReadable()) {
            $mode = $stream->isWritable() ? 'r+' : 'r';
        } elseif ($stream->isWritable()) {
            $mode = 'w';
        } else {
            throw new \InvalidArgumentException('The stream must be readable, '
                . 'writable, or both.');
        }

<<<<<<< HEAD
        return fopen('guzzle://stream', $mode, false, self::createStreamContext($stream));
=======
        return fopen('guzzle://stream', $mode, null, self::createStreamContext($stream));
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Creates a stream context that can be used to open a stream as a php stream resource.
     *
<<<<<<< HEAD
=======
     * @param StreamInterface $stream
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @return resource
     */
    public static function createStreamContext(StreamInterface $stream)
    {
        return stream_context_create([
            'guzzle' => ['stream' => $stream]
        ]);
    }

    /**
     * Registers the stream wrapper if needed
     */
<<<<<<< HEAD
    public static function register(): void
=======
    public static function register()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!in_array('guzzle', stream_get_wrappers())) {
            stream_wrapper_register('guzzle', __CLASS__);
        }
    }

<<<<<<< HEAD
    public function stream_open(string $path, string $mode, int $options, string &$opened_path = null): bool
=======
    public function stream_open($path, $mode, $options, &$opened_path)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $options = stream_context_get_options($this->context);

        if (!isset($options['guzzle']['stream'])) {
            return false;
        }

        $this->mode = $mode;
        $this->stream = $options['guzzle']['stream'];

        return true;
    }

<<<<<<< HEAD
    public function stream_read(int $count): string
=======
    public function stream_read($count)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->read($count);
    }

<<<<<<< HEAD
    public function stream_write(string $data): int
    {
        return $this->stream->write($data);
    }

    public function stream_tell(): int
=======
    public function stream_write($data)
    {
        return (int) $this->stream->write($data);
    }

    public function stream_tell()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->tell();
    }

<<<<<<< HEAD
    public function stream_eof(): bool
=======
    public function stream_eof()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->stream->eof();
    }

<<<<<<< HEAD
    public function stream_seek(int $offset, int $whence): bool
=======
    public function stream_seek($offset, $whence)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->stream->seek($offset, $whence);

        return true;
    }

<<<<<<< HEAD
    /**
     * @return resource|false
     */
    public function stream_cast(int $cast_as)
    {
        $stream = clone($this->stream);
        $resource = $stream->detach();

        return $resource ?? false;
    }

    /**
     * @return array<int|string, int>
     */
    public function stream_stat(): array
=======
    public function stream_cast($cast_as)
    {
        $stream = clone($this->stream);

        return $stream->detach();
    }

    public function stream_stat()
>>>>>>> parent of 31cfa1b1 (p)
    {
        static $modeMap = [
            'r'  => 33060,
            'rb' => 33060,
            'r+' => 33206,
            'w'  => 33188,
            'wb' => 33188
        ];

        return [
            'dev'     => 0,
            'ino'     => 0,
            'mode'    => $modeMap[$this->mode],
            'nlink'   => 0,
            'uid'     => 0,
            'gid'     => 0,
            'rdev'    => 0,
            'size'    => $this->stream->getSize() ?: 0,
            'atime'   => 0,
            'mtime'   => 0,
            'ctime'   => 0,
            'blksize' => 0,
            'blocks'  => 0
        ];
    }

<<<<<<< HEAD
    /**
     * @return array<int|string, int>
     */
    public function url_stat(string $path, int $flags): array
=======
    public function url_stat($path, $flags)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return [
            'dev'     => 0,
            'ino'     => 0,
            'mode'    => 0,
            'nlink'   => 0,
            'uid'     => 0,
            'gid'     => 0,
            'rdev'    => 0,
            'size'    => 0,
            'atime'   => 0,
            'mtime'   => 0,
            'ctime'   => 0,
            'blksize' => 0,
            'blocks'  => 0
        ];
    }
}
