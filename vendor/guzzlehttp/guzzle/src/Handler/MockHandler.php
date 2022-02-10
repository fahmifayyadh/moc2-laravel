<?php
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Handler;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
<<<<<<< HEAD
use GuzzleHttp\Promise as P;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\TransferStats;
use GuzzleHttp\Utils;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Handler that returns responses or throw exceptions from a queue.
 *
 * @final
 */
class MockHandler implements \Countable
{
    /**
     * @var array
     */
    private $queue = [];

    /**
     * @var RequestInterface|null
     */
    private $lastRequest;

    /**
     * @var array
     */
    private $lastOptions = [];

    /**
     * @var callable|null
     */
    private $onFulfilled;

    /**
     * @var callable|null
     */
=======
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\RejectedPromise;
use GuzzleHttp\TransferStats;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Handler that returns responses or throw exceptions from a queue.
 */
class MockHandler implements \Countable
{
    private $queue = [];
    private $lastRequest;
    private $lastOptions;
    private $onFulfilled;
>>>>>>> parent of 31cfa1b1 (p)
    private $onRejected;

    /**
     * Creates a new MockHandler that uses the default handler stack list of
     * middlewares.
     *
<<<<<<< HEAD
     * @param array|null    $queue       Array of responses, callables, or exceptions.
     * @param callable|null $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable|null $onRejected  Callback to invoke when the return value is rejected.
     */
    public static function createWithMiddleware(array $queue = null, callable $onFulfilled = null, callable $onRejected = null): HandlerStack
    {
=======
     * @param array $queue Array of responses, callables, or exceptions.
     * @param callable $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable $onRejected  Callback to invoke when the return value is rejected.
     *
     * @return HandlerStack
     */
    public static function createWithMiddleware(
        array $queue = null,
        callable $onFulfilled = null,
        callable $onRejected = null
    ) {
>>>>>>> parent of 31cfa1b1 (p)
        return HandlerStack::create(new self($queue, $onFulfilled, $onRejected));
    }

    /**
     * The passed in value must be an array of
<<<<<<< HEAD
     * {@see \Psr\Http\Message\ResponseInterface} objects, Exceptions,
     * callables, or Promises.
     *
     * @param array<int, mixed>|null $queue       The parameters to be passed to the append function, as an indexed array.
     * @param callable|null          $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable|null          $onRejected  Callback to invoke when the return value is rejected.
     */
    public function __construct(array $queue = null, callable $onFulfilled = null, callable $onRejected = null)
    {
=======
     * {@see Psr7\Http\Message\ResponseInterface} objects, Exceptions,
     * callables, or Promises.
     *
     * @param array $queue
     * @param callable $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable $onRejected  Callback to invoke when the return value is rejected.
     */
    public function __construct(
        array $queue = null,
        callable $onFulfilled = null,
        callable $onRejected = null
    ) {
>>>>>>> parent of 31cfa1b1 (p)
        $this->onFulfilled = $onFulfilled;
        $this->onRejected = $onRejected;

        if ($queue) {
<<<<<<< HEAD
            // array_values included for BC
            $this->append(...array_values($queue));
        }
    }

    public function __invoke(RequestInterface $request, array $options): PromiseInterface
=======
            call_user_func_array([$this, 'append'], $queue);
        }
    }

    public function __invoke(RequestInterface $request, array $options)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!$this->queue) {
            throw new \OutOfBoundsException('Mock queue is empty');
        }

<<<<<<< HEAD
        if (isset($options['delay']) && \is_numeric($options['delay'])) {
            \usleep((int) $options['delay'] * 1000);
=======
        if (isset($options['delay']) && is_numeric($options['delay'])) {
            usleep($options['delay'] * 1000);
>>>>>>> parent of 31cfa1b1 (p)
        }

        $this->lastRequest = $request;
        $this->lastOptions = $options;
<<<<<<< HEAD
        $response = \array_shift($this->queue);

        if (isset($options['on_headers'])) {
            if (!\is_callable($options['on_headers'])) {
=======
        $response = array_shift($this->queue);

        if (isset($options['on_headers'])) {
            if (!is_callable($options['on_headers'])) {
>>>>>>> parent of 31cfa1b1 (p)
                throw new \InvalidArgumentException('on_headers must be callable');
            }
            try {
                $options['on_headers']($response);
            } catch (\Exception $e) {
                $msg = 'An error was encountered during the on_headers event';
                $response = new RequestException($msg, $request, $response, $e);
            }
        }

<<<<<<< HEAD
        if (\is_callable($response)) {
            $response = $response($request, $options);
        }

        $response = $response instanceof \Throwable
            ? P\Create::rejectionFor($response)
            : P\Create::promiseFor($response);

        return $response->then(
            function (?ResponseInterface $value) use ($request, $options) {
                $this->invokeStats($request, $options, $value);
                if ($this->onFulfilled) {
                    ($this->onFulfilled)($value);
                }

                if ($value !== null && isset($options['sink'])) {
                    $contents = (string) $value->getBody();
                    $sink = $options['sink'];

                    if (\is_resource($sink)) {
                        \fwrite($sink, $contents);
                    } elseif (\is_string($sink)) {
                        \file_put_contents($sink, $contents);
                    } elseif ($sink instanceof StreamInterface) {
=======
        if (is_callable($response)) {
            $response = call_user_func($response, $request, $options);
        }

        $response = $response instanceof \Exception
            ? \GuzzleHttp\Promise\rejection_for($response)
            : \GuzzleHttp\Promise\promise_for($response);

        return $response->then(
            function ($value) use ($request, $options) {
                $this->invokeStats($request, $options, $value);
                if ($this->onFulfilled) {
                    call_user_func($this->onFulfilled, $value);
                }
                if (isset($options['sink'])) {
                    $contents = (string) $value->getBody();
                    $sink = $options['sink'];

                    if (is_resource($sink)) {
                        fwrite($sink, $contents);
                    } elseif (is_string($sink)) {
                        file_put_contents($sink, $contents);
                    } elseif ($sink instanceof \Psr\Http\Message\StreamInterface) {
>>>>>>> parent of 31cfa1b1 (p)
                        $sink->write($contents);
                    }
                }

                return $value;
            },
            function ($reason) use ($request, $options) {
                $this->invokeStats($request, $options, null, $reason);
                if ($this->onRejected) {
<<<<<<< HEAD
                    ($this->onRejected)($reason);
                }
                return P\Create::rejectionFor($reason);
=======
                    call_user_func($this->onRejected, $reason);
                }
                return \GuzzleHttp\Promise\rejection_for($reason);
>>>>>>> parent of 31cfa1b1 (p)
            }
        );
    }

    /**
     * Adds one or more variadic requests, exceptions, callables, or promises
     * to the queue.
<<<<<<< HEAD
     *
     * @param mixed ...$values
     */
    public function append(...$values): void
    {
        foreach ($values as $value) {
            if ($value instanceof ResponseInterface
                || $value instanceof \Throwable
                || $value instanceof PromiseInterface
                || \is_callable($value)
            ) {
                $this->queue[] = $value;
            } else {
                throw new \TypeError('Expected a Response, Promise, Throwable or callable. Found ' . Utils::describeType($value));
=======
     */
    public function append()
    {
        foreach (func_get_args() as $value) {
            if ($value instanceof ResponseInterface
                || $value instanceof \Exception
                || $value instanceof PromiseInterface
                || is_callable($value)
            ) {
                $this->queue[] = $value;
            } else {
                throw new \InvalidArgumentException('Expected a response or '
                    . 'exception. Found ' . \GuzzleHttp\describe_type($value));
>>>>>>> parent of 31cfa1b1 (p)
            }
        }
    }

    /**
     * Get the last received request.
<<<<<<< HEAD
     */
    public function getLastRequest(): ?RequestInterface
=======
     *
     * @return RequestInterface
     */
    public function getLastRequest()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->lastRequest;
    }

    /**
     * Get the last received request options.
<<<<<<< HEAD
     */
    public function getLastOptions(): array
=======
     *
     * @return array
     */
    public function getLastOptions()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->lastOptions;
    }

    /**
     * Returns the number of remaining items in the queue.
<<<<<<< HEAD
     */
    public function count(): int
    {
        return \count($this->queue);
    }

    public function reset(): void
=======
     *
     * @return int
     */
    public function count()
    {
        return count($this->queue);
    }

    public function reset()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->queue = [];
    }

<<<<<<< HEAD
    /**
     * @param mixed $reason Promise or reason.
     */
=======
>>>>>>> parent of 31cfa1b1 (p)
    private function invokeStats(
        RequestInterface $request,
        array $options,
        ResponseInterface $response = null,
        $reason = null
<<<<<<< HEAD
    ): void {
        if (isset($options['on_stats'])) {
            $transferTime = $options['transfer_time'] ?? 0;
            $stats = new TransferStats($request, $response, $transferTime, $reason);
            ($options['on_stats'])($stats);
=======
    ) {
        if (isset($options['on_stats'])) {
            $transferTime = isset($options['transfer_time']) ? $options['transfer_time'] : 0;
            $stats = new TransferStats($request, $response, $transferTime, $reason);
            call_user_func($options['on_stats'], $stats);
>>>>>>> parent of 31cfa1b1 (p)
        }
    }
}
