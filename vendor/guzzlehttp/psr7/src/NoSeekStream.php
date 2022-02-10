<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
<<<<<<< HEAD
 * Stream decorator that prevents a stream from being seeked.
 */
final class NoSeekStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET): void
=======
 * Stream decorator that prevents a stream from being seeked
 */
class NoSeekStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET)
>>>>>>> parent of 31cfa1b1 (p)
    {
        throw new \RuntimeException('Cannot seek a NoSeekStream');
    }

<<<<<<< HEAD
    public function isSeekable(): bool
=======
    public function isSeekable()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return false;
    }
}
