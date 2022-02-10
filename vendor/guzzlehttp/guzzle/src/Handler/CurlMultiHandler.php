<?php
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Handler;

use GuzzleHttp\Promise as P;
use GuzzleHttp\Promise\Promise;
<<<<<<< HEAD
use GuzzleHttp\Promise\PromiseInterface;
=======
>>>>>>> parent of 31cfa1b1 (p)
use GuzzleHttp\Utils;
use Psr\Http\Message\RequestInterface;

/**
 * Returns an asynchronous response using curl_multi_* functions.
 *
 * When using the CurlMultiHandler, custom curl options can be specified as an
 * associative array of curl option constants mapping to values in the
 * **curl** key of the provided request options.
 *
<<<<<<< HEAD
 * @property resource|\CurlMultiHandle $_mh Internal use only. Lazy loaded multi-handle.
 *
 * @final
 */
class CurlMultiHandler
{
    /**
     * @var CurlFactoryInterface
     */
    private $factory;

    /**
     * @var int
     */
    private $selectTimeout;

    /**
     * @var resource|\CurlMultiHandle|null the currently executing resource in `curl_multi_exec`.
     */
    private $active;

    /**
     * @var array Request entry handles, indexed by handle id in `addRequest`.
     *
     * @see CurlMultiHandler::addRequest
     */
    private $handles = [];

    /**
     * @var array<int, float> An array of delay times, indexed by handle id in `addRequest`.
     *
     * @see CurlMultiHandler::addRequest
     */
    private $delays = [];

    /**
     * @var array<mixed> An associative array of CURLMOPT_* options and corresponding values for curl_multi_setopt()
     */
=======
 * @property resource $_mh Internal use only. Lazy loaded multi-handle.
 */
class CurlMultiHandler
{
    /** @var CurlFactoryInterface */
    private $factory;
    private $selectTimeout;
    private $active;
    private $handles = [];
    private $delays = [];
>>>>>>> parent of 31cfa1b1 (p)
    private $options = [];

    /**
     * This handler accepts the following options:
     *
     * - handle_factory: An optional factory  used to create curl handles
     * - select_timeout: Optional timeout (in seconds) to block before timing
     *   out while selecting curl handles. Defaults to 1 second.
     * - options: An associative array of CURLMOPT_* options and
     *   corresponding values for curl_multi_setopt()
<<<<<<< HEAD
     */
    public function __construct(array $options = [])
    {
        $this->factory = $options['handle_factory'] ?? new CurlFactory(50);

        if (isset($options['select_timeout'])) {
            $this->selectTimeout = $options['select_timeout'];
        } elseif ($selectTimeout = Utils::getenv('GUZZLE_CURL_SELECT_TIMEOUT')) {
            @trigger_error('Since guzzlehttp/guzzle 7.2.0: Using environment variable GUZZLE_CURL_SELECT_TIMEOUT is deprecated. Use option "select_timeout" instead.', \E_USER_DEPRECATED);
            $this->selectTimeout = (int) $selectTimeout;
=======
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->factory = isset($options['handle_factory'])
            ? $options['handle_factory'] : new CurlFactory(50);

        if (isset($options['select_timeout'])) {
            $this->selectTimeout = $options['select_timeout'];
        } elseif ($selectTimeout = getenv('GUZZLE_CURL_SELECT_TIMEOUT')) {
            $this->selectTimeout = $selectTimeout;
>>>>>>> parent of 31cfa1b1 (p)
        } else {
            $this->selectTimeout = 1;
        }

<<<<<<< HEAD
        $this->options = $options['options'] ?? [];
    }

    /**
     * @param string $name
     *
     * @return resource|\CurlMultiHandle
     *
     * @throws \BadMethodCallException when another field as `_mh` will be gotten
     * @throws \RuntimeException       when curl can not initialize a multi handle
     */
    public function __get($name)
    {
        if ($name !== '_mh') {
            throw new \BadMethodCallException("Can not get other property as '_mh'.");
        }

        $multiHandle = \curl_multi_init();

        if (false === $multiHandle) {
            throw new \RuntimeException('Can not initialize curl multi handle.');
        }

        $this->_mh = $multiHandle;

        foreach ($this->options as $option => $value) {
            // A warning is raised in case of a wrong option.
            curl_multi_setopt($this->_mh, $option, $value);
        }

        return $this->_mh;
=======
        $this->options = isset($options['options']) ? $options['options'] : [];
    }

    public function __get($name)
    {
        if ($name === '_mh') {
            $this->_mh = curl_multi_init();

            foreach ($this->options as $option => $value) {
                // A warning is raised in case of a wrong option.
                curl_multi_setopt($this->_mh, $option, $value);
            }

            // Further calls to _mh will return the value directly, without entering the
            // __get() method at all.
            return $this->_mh;
        }

        throw new \BadMethodCallException();
>>>>>>> parent of 31cfa1b1 (p)
    }

    public function __destruct()
    {
        if (isset($this->_mh)) {
<<<<<<< HEAD
            \curl_multi_close($this->_mh);
=======
            curl_multi_close($this->_mh);
>>>>>>> parent of 31cfa1b1 (p)
            unset($this->_mh);
        }
    }

<<<<<<< HEAD
    public function __invoke(RequestInterface $request, array $options): PromiseInterface
=======
    public function __invoke(RequestInterface $request, array $options)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $easy = $this->factory->create($request, $options);
        $id = (int) $easy->handle;

        $promise = new Promise(
            [$this, 'execute'],
            function () use ($id) {
                return $this->cancel($id);
            }
        );

        $this->addRequest(['easy' => $easy, 'deferred' => $promise]);

        return $promise;
    }

    /**
     * Ticks the curl event loop.
     */
<<<<<<< HEAD
    public function tick(): void
=======
    public function tick()
>>>>>>> parent of 31cfa1b1 (p)
    {
        // Add any delayed handles if needed.
        if ($this->delays) {
            $currentTime = Utils::currentTime();
            foreach ($this->delays as $id => $delay) {
                if ($currentTime >= $delay) {
                    unset($this->delays[$id]);
<<<<<<< HEAD
                    \curl_multi_add_handle(
=======
                    curl_multi_add_handle(
>>>>>>> parent of 31cfa1b1 (p)
                        $this->_mh,
                        $this->handles[$id]['easy']->handle
                    );
                }
            }
        }

        // Step through the task queue which may add additional requests.
<<<<<<< HEAD
        P\Utils::queue()->run();

        if ($this->active && \curl_multi_select($this->_mh, $this->selectTimeout) === -1) {
            // Perform a usleep if a select returns -1.
            // See: https://bugs.php.net/bug.php?id=61141
            \usleep(250);
        }

        while (\curl_multi_exec($this->_mh, $this->active) === \CURLM_CALL_MULTI_PERFORM);
=======
        P\queue()->run();

        if ($this->active &&
            curl_multi_select($this->_mh, $this->selectTimeout) === -1
        ) {
            // Perform a usleep if a select returns -1.
            // See: https://bugs.php.net/bug.php?id=61141
            usleep(250);
        }

        while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM);
>>>>>>> parent of 31cfa1b1 (p)

        $this->processMessages();
    }

    /**
     * Runs until all outstanding connections have completed.
     */
<<<<<<< HEAD
    public function execute(): void
    {
        $queue = P\Utils::queue();
=======
    public function execute()
    {
        $queue = P\queue();
>>>>>>> parent of 31cfa1b1 (p)

        while ($this->handles || !$queue->isEmpty()) {
            // If there are no transfers, then sleep for the next delay
            if (!$this->active && $this->delays) {
<<<<<<< HEAD
                \usleep($this->timeToNext());
=======
                usleep($this->timeToNext());
>>>>>>> parent of 31cfa1b1 (p)
            }
            $this->tick();
        }
    }

<<<<<<< HEAD
    private function addRequest(array $entry): void
=======
    private function addRequest(array $entry)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $easy = $entry['easy'];
        $id = (int) $easy->handle;
        $this->handles[$id] = $entry;
        if (empty($easy->options['delay'])) {
<<<<<<< HEAD
            \curl_multi_add_handle($this->_mh, $easy->handle);
=======
            curl_multi_add_handle($this->_mh, $easy->handle);
>>>>>>> parent of 31cfa1b1 (p)
        } else {
            $this->delays[$id] = Utils::currentTime() + ($easy->options['delay'] / 1000);
        }
    }

    /**
     * Cancels a handle from sending and removes references to it.
     *
     * @param int $id Handle ID to cancel and remove.
     *
     * @return bool True on success, false on failure.
     */
<<<<<<< HEAD
    private function cancel($id): bool
    {
        if (!is_int($id)) {
            trigger_deprecation('guzzlehttp/guzzle', '7.4', 'Not passing an integer to %s::%s() is deprecated and will cause an error in 8.0.', __CLASS__, __FUNCTION__);
        }

=======
    private function cancel($id)
    {
>>>>>>> parent of 31cfa1b1 (p)
        // Cannot cancel if it has been processed.
        if (!isset($this->handles[$id])) {
            return false;
        }

        $handle = $this->handles[$id]['easy']->handle;
        unset($this->delays[$id], $this->handles[$id]);
<<<<<<< HEAD
        \curl_multi_remove_handle($this->_mh, $handle);
        \curl_close($handle);
=======
        curl_multi_remove_handle($this->_mh, $handle);
        curl_close($handle);
>>>>>>> parent of 31cfa1b1 (p)

        return true;
    }

<<<<<<< HEAD
    private function processMessages(): void
    {
        while ($done = \curl_multi_info_read($this->_mh)) {
            if ($done['msg'] !== \CURLMSG_DONE) {
                // if it's not done, then it would be premature to remove the handle. ref https://github.com/guzzle/guzzle/pull/2892#issuecomment-945150216
                continue;
            }
            $id = (int) $done['handle'];
            \curl_multi_remove_handle($this->_mh, $done['handle']);
=======
    private function processMessages()
    {
        while ($done = curl_multi_info_read($this->_mh)) {
            $id = (int) $done['handle'];
            curl_multi_remove_handle($this->_mh, $done['handle']);
>>>>>>> parent of 31cfa1b1 (p)

            if (!isset($this->handles[$id])) {
                // Probably was cancelled.
                continue;
            }

            $entry = $this->handles[$id];
            unset($this->handles[$id], $this->delays[$id]);
            $entry['easy']->errno = $done['result'];
            $entry['deferred']->resolve(
<<<<<<< HEAD
                CurlFactory::finish($this, $entry['easy'], $this->factory)
=======
                CurlFactory::finish(
                    $this,
                    $entry['easy'],
                    $this->factory
                )
>>>>>>> parent of 31cfa1b1 (p)
            );
        }
    }

<<<<<<< HEAD
    private function timeToNext(): int
    {
        $currentTime = Utils::currentTime();
        $nextTime = \PHP_INT_MAX;
=======
    private function timeToNext()
    {
        $currentTime = Utils::currentTime();
        $nextTime = PHP_INT_MAX;
>>>>>>> parent of 31cfa1b1 (p)
        foreach ($this->delays as $time) {
            if ($time < $nextTime) {
                $nextTime = $time;
            }
        }

<<<<<<< HEAD
        return ((int) \max(0, $nextTime - $currentTime)) * 1000000;
=======
        return max(0, $nextTime - $currentTime) * 1000000;
>>>>>>> parent of 31cfa1b1 (p)
    }
}
