<?php
<<<<<<< HEAD

namespace GuzzleHttp\Handler;

use GuzzleHttp\Promise\PromiseInterface;
=======
namespace GuzzleHttp\Handler;

use GuzzleHttp\Psr7;
>>>>>>> parent of 31cfa1b1 (p)
use Psr\Http\Message\RequestInterface;

/**
 * HTTP handler that uses cURL easy handles as a transport layer.
 *
 * When using the CurlHandler, custom curl options can be specified as an
 * associative array of curl option constants mapping to values in the
 * **curl** key of the "client" key of the request.
<<<<<<< HEAD
 *
 * @final
 */
class CurlHandler
{
    /**
     * @var CurlFactoryInterface
     */
=======
 */
class CurlHandler
{
    /** @var CurlFactoryInterface */
>>>>>>> parent of 31cfa1b1 (p)
    private $factory;

    /**
     * Accepts an associative array of options:
     *
<<<<<<< HEAD
     * - handle_factory: Optional curl factory used to create cURL handles.
     *
     * @param array{handle_factory?: ?CurlFactoryInterface} $options Array of options to use with the handler
     */
    public function __construct(array $options = [])
    {
        $this->factory = $options['handle_factory']
            ?? new CurlFactory(3);
    }

    public function __invoke(RequestInterface $request, array $options): PromiseInterface
    {
        if (isset($options['delay'])) {
            \usleep($options['delay'] * 1000);
        }

        $easy = $this->factory->create($request, $options);
        \curl_exec($easy->handle);
        $easy->errno = \curl_errno($easy->handle);
=======
     * - factory: Optional curl factory used to create cURL handles.
     *
     * @param array $options Array of options to use with the handler
     */
    public function __construct(array $options = [])
    {
        $this->factory = isset($options['handle_factory'])
            ? $options['handle_factory']
            : new CurlFactory(3);
    }

    public function __invoke(RequestInterface $request, array $options)
    {
        if (isset($options['delay'])) {
            usleep($options['delay'] * 1000);
        }

        $easy = $this->factory->create($request, $options);
        curl_exec($easy->handle);
        $easy->errno = curl_errno($easy->handle);
>>>>>>> parent of 31cfa1b1 (p)

        return CurlFactory::finish($this, $easy, $this->factory);
    }
}
