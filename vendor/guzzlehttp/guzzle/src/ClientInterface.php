<?php
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Client interface for sending HTTP requests.
 */
interface ClientInterface
{
    /**
<<<<<<< HEAD
     * The Guzzle major version.
     */
    public const MAJOR_VERSION = 7;
=======
     * @deprecated Will be removed in Guzzle 7.0.0
     */
    const VERSION = '6.5.5';
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
     *
<<<<<<< HEAD
     * @throws GuzzleException
     */
    public function send(RequestInterface $request, array $options = []): ResponseInterface;
=======
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function send(RequestInterface $request, array $options = []);
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Asynchronously send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
<<<<<<< HEAD
     */
    public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface;
=======
     *
     * @return PromiseInterface
     */
    public function sendAsync(RequestInterface $request, array $options = []);
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Create and send an HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string              $method  HTTP method.
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
<<<<<<< HEAD
     * @throws GuzzleException
     */
    public function request(string $method, $uri, array $options = []): ResponseInterface;
=======
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request($method, $uri, array $options = []);
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Create and send an asynchronous HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string              $method  HTTP method
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
<<<<<<< HEAD
     */
    public function requestAsync(string $method, $uri, array $options = []): PromiseInterface;
=======
     *
     * @return PromiseInterface
     */
    public function requestAsync($method, $uri, array $options = []);
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * Get a client configuration option.
     *
     * These options include default request options of the client, a "handler"
     * (if utilized by the concrete client), and a "base_uri" if utilized by
     * the concrete client.
     *
     * @param string|null $option The config option to retrieve.
     *
     * @return mixed
<<<<<<< HEAD
     *
     * @deprecated ClientInterface::getConfig will be removed in guzzlehttp/guzzle:8.0.
     */
    public function getConfig(?string $option = null);
=======
     */
    public function getConfig($option = null);
>>>>>>> parent of 31cfa1b1 (p)
}
