<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Stub;

<<<<<<< HEAD
use function sprintf;
use PHPUnit\Framework\MockObject\Invocation;
use SebastianBergmann\Exporter\Exporter;
use Throwable;
=======
use PHPUnit\Framework\MockObject\Invocation;
use SebastianBergmann\Exporter\Exporter;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception implements Stub
{
    private $exception;

<<<<<<< HEAD
    public function __construct(Throwable $exception)
=======
    public function __construct(\Throwable $exception)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->exception = $exception;
    }

    /**
<<<<<<< HEAD
     * @throws Throwable
=======
     * @throws \Throwable
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function invoke(Invocation $invocation): void
    {
        throw $this->exception;
    }

    public function toString(): string
    {
        $exporter = new Exporter;

<<<<<<< HEAD
        return sprintf(
=======
        return \sprintf(
>>>>>>> parent of 31cfa1b1 (p)
            'raise user-specified exception %s',
            $exporter->export($this->exception)
        );
    }
}
