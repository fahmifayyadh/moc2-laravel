<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Lazily reads or writes to a file that is opened only after an IO operation
 * take place on the stream.
 */
<<<<<<< HEAD
final class LazyOpenStream implements StreamInterface
{
    use StreamDecoratorTrait;

    /** @var string */
    private $filename;

    /** @var string */
=======
class LazyOpenStream implements StreamInterface
{
    use StreamDecoratorTrait;

    /** @var string File to open */
    private $filename;

    /** @var string $mode */
>>>>>>> parent of 31cfa1b1 (p)
    private $mode;

    /**
     * @param string $filename File to lazily open
     * @param string $mode     fopen mode to use when opening the stream
     */
<<<<<<< HEAD
    public function __construct(string $filename, string $mode)
=======
    public function __construct($filename, $mode)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->filename = $filename;
        $this->mode = $mode;
    }

    /**
     * Creates the underlying stream lazily when required.
<<<<<<< HEAD
     */
    protected function createStream(): StreamInterface
=======
     *
     * @return StreamInterface
     */
    protected function createStream()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return Utils::streamFor(Utils::tryFopen($this->filename, $this->mode));
    }
}
