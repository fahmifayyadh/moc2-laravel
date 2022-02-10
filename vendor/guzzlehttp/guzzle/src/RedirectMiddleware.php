<?php
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\TooManyRedirectsException;
use GuzzleHttp\Promise\PromiseInterface;
<<<<<<< HEAD
=======
use GuzzleHttp\Psr7;
>>>>>>> parent of 31cfa1b1 (p)
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Request redirect middleware.
 *
 * Apply this middleware like other middleware using
 * {@see \GuzzleHttp\Middleware::redirect()}.
<<<<<<< HEAD
 *
 * @final
 */
class RedirectMiddleware
{
    public const HISTORY_HEADER = 'X-Guzzle-Redirect-History';

    public const STATUS_HISTORY_HEADER = 'X-Guzzle-Redirect-Status-History';

    /**
     * @var array
     */
=======
 */
class RedirectMiddleware
{
    const HISTORY_HEADER = 'X-Guzzle-Redirect-History';

    const STATUS_HISTORY_HEADER = 'X-Guzzle-Redirect-Status-History';

>>>>>>> parent of 31cfa1b1 (p)
    public static $defaultSettings = [
        'max'             => 5,
        'protocols'       => ['http', 'https'],
        'strict'          => false,
        'referer'         => false,
        'track_redirects' => false,
    ];

<<<<<<< HEAD
    /**
     * @var callable(RequestInterface, array): PromiseInterface
     */
    private $nextHandler;

    /**
     * @param callable(RequestInterface, array): PromiseInterface $nextHandler Next handler to invoke.
=======
    /** @var callable  */
    private $nextHandler;

    /**
     * @param callable $nextHandler Next handler to invoke.
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct(callable $nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }

<<<<<<< HEAD
    public function __invoke(RequestInterface $request, array $options): PromiseInterface
=======
    /**
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return PromiseInterface
     */
    public function __invoke(RequestInterface $request, array $options)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $fn = $this->nextHandler;

        if (empty($options['allow_redirects'])) {
            return $fn($request, $options);
        }

        if ($options['allow_redirects'] === true) {
            $options['allow_redirects'] = self::$defaultSettings;
<<<<<<< HEAD
        } elseif (!\is_array($options['allow_redirects'])) {
=======
        } elseif (!is_array($options['allow_redirects'])) {
>>>>>>> parent of 31cfa1b1 (p)
            throw new \InvalidArgumentException('allow_redirects must be true, false, or array');
        } else {
            // Merge the default settings with the provided settings
            $options['allow_redirects'] += self::$defaultSettings;
        }

        if (empty($options['allow_redirects']['max'])) {
            return $fn($request, $options);
        }

        return $fn($request, $options)
            ->then(function (ResponseInterface $response) use ($request, $options) {
                return $this->checkRedirect($request, $options, $response);
            });
    }

    /**
<<<<<<< HEAD
     * @return ResponseInterface|PromiseInterface
     */
    public function checkRedirect(RequestInterface $request, array $options, ResponseInterface $response)
    {
        if (\strpos((string) $response->getStatusCode(), '3') !== 0
=======
     * @param RequestInterface  $request
     * @param array             $options
     * @param ResponseInterface $response
     *
     * @return ResponseInterface|PromiseInterface
     */
    public function checkRedirect(
        RequestInterface $request,
        array $options,
        ResponseInterface $response
    ) {
        if (substr($response->getStatusCode(), 0, 1) != '3'
>>>>>>> parent of 31cfa1b1 (p)
            || !$response->hasHeader('Location')
        ) {
            return $response;
        }

<<<<<<< HEAD
        $this->guardMax($request, $response, $options);
        $nextRequest = $this->modifyRequest($request, $options, $response);

        if (isset($options['allow_redirects']['on_redirect'])) {
            ($options['allow_redirects']['on_redirect'])(
=======
        $this->guardMax($request, $options);
        $nextRequest = $this->modifyRequest($request, $options, $response);

        if (isset($options['allow_redirects']['on_redirect'])) {
            call_user_func(
                $options['allow_redirects']['on_redirect'],
>>>>>>> parent of 31cfa1b1 (p)
                $request,
                $response,
                $nextRequest->getUri()
            );
        }

<<<<<<< HEAD
=======
        /** @var PromiseInterface|ResponseInterface $promise */
>>>>>>> parent of 31cfa1b1 (p)
        $promise = $this($nextRequest, $options);

        // Add headers to be able to track history of redirects.
        if (!empty($options['allow_redirects']['track_redirects'])) {
            return $this->withTracking(
                $promise,
                (string) $nextRequest->getUri(),
                $response->getStatusCode()
            );
        }

        return $promise;
    }

    /**
     * Enable tracking on promise.
<<<<<<< HEAD
     */
    private function withTracking(PromiseInterface $promise, string $uri, int $statusCode): PromiseInterface
    {
        return $promise->then(
            static function (ResponseInterface $response) use ($uri, $statusCode) {
=======
     *
     * @return PromiseInterface
     */
    private function withTracking(PromiseInterface $promise, $uri, $statusCode)
    {
        return $promise->then(
            function (ResponseInterface $response) use ($uri, $statusCode) {
>>>>>>> parent of 31cfa1b1 (p)
                // Note that we are pushing to the front of the list as this
                // would be an earlier response than what is currently present
                // in the history header.
                $historyHeader = $response->getHeader(self::HISTORY_HEADER);
                $statusHeader = $response->getHeader(self::STATUS_HISTORY_HEADER);
<<<<<<< HEAD
                \array_unshift($historyHeader, $uri);
                \array_unshift($statusHeader, (string) $statusCode);

=======
                array_unshift($historyHeader, $uri);
                array_unshift($statusHeader, $statusCode);
>>>>>>> parent of 31cfa1b1 (p)
                return $response->withHeader(self::HISTORY_HEADER, $historyHeader)
                                ->withHeader(self::STATUS_HISTORY_HEADER, $statusHeader);
            }
        );
    }

    /**
     * Check for too many redirects
     *
<<<<<<< HEAD
     * @throws TooManyRedirectsException Too many redirects.
     */
    private function guardMax(RequestInterface $request, ResponseInterface $response, array &$options): void
    {
        $current = $options['__redirect_count']
            ?? 0;
=======
     * @return void
     *
     * @throws TooManyRedirectsException Too many redirects.
     */
    private function guardMax(RequestInterface $request, array &$options)
    {
        $current = isset($options['__redirect_count'])
            ? $options['__redirect_count']
            : 0;
>>>>>>> parent of 31cfa1b1 (p)
        $options['__redirect_count'] = $current + 1;
        $max = $options['allow_redirects']['max'];

        if ($options['__redirect_count'] > $max) {
<<<<<<< HEAD
            throw new TooManyRedirectsException("Will not follow more than {$max} redirects", $request, $response);
        }
    }

    public function modifyRequest(RequestInterface $request, array $options, ResponseInterface $response): RequestInterface
    {
=======
            throw new TooManyRedirectsException(
                "Will not follow more than {$max} redirects",
                $request
            );
        }
    }

    /**
     * @param RequestInterface  $request
     * @param array             $options
     * @param ResponseInterface $response
     *
     * @return RequestInterface
     */
    public function modifyRequest(
        RequestInterface $request,
        array $options,
        ResponseInterface $response
    ) {
>>>>>>> parent of 31cfa1b1 (p)
        // Request modifications to apply.
        $modify = [];
        $protocols = $options['allow_redirects']['protocols'];

        // Use a GET request if this is an entity enclosing request and we are
        // not forcing RFC compliance, but rather emulating what all browsers
        // would do.
        $statusCode = $response->getStatusCode();
        if ($statusCode == 303 ||
            ($statusCode <= 302 && !$options['allow_redirects']['strict'])
        ) {
<<<<<<< HEAD
            $safeMethods = ['GET', 'HEAD', 'OPTIONS'];
            $requestMethod = $request->getMethod();

            $modify['method'] = in_array($requestMethod, $safeMethods) ? $requestMethod : 'GET';
=======
            $modify['method'] = 'GET';
>>>>>>> parent of 31cfa1b1 (p)
            $modify['body'] = '';
        }

        $uri = $this->redirectUri($request, $response, $protocols);
        if (isset($options['idn_conversion']) && ($options['idn_conversion'] !== false)) {
<<<<<<< HEAD
            $idnOptions = ($options['idn_conversion'] === true) ? \IDNA_DEFAULT : $options['idn_conversion'];
=======
            $idnOptions = ($options['idn_conversion'] === true) ? IDNA_DEFAULT : $options['idn_conversion'];
>>>>>>> parent of 31cfa1b1 (p)
            $uri = Utils::idnUriConvert($uri, $idnOptions);
        }

        $modify['uri'] = $uri;
<<<<<<< HEAD
        Psr7\Message::rewindBody($request);
=======
        Psr7\rewind_body($request);
>>>>>>> parent of 31cfa1b1 (p)

        // Add the Referer header if it is told to do so and only
        // add the header if we are not redirecting from https to http.
        if ($options['allow_redirects']['referer']
            && $modify['uri']->getScheme() === $request->getUri()->getScheme()
        ) {
            $uri = $request->getUri()->withUserInfo('');
            $modify['set_headers']['Referer'] = (string) $uri;
        } else {
            $modify['remove_headers'][] = 'Referer';
        }

        // Remove Authorization header if host is different.
        if ($request->getUri()->getHost() !== $modify['uri']->getHost()) {
            $modify['remove_headers'][] = 'Authorization';
        }

<<<<<<< HEAD
        return Psr7\Utils::modifyRequest($request, $modify);
=======
        return Psr7\modify_request($request, $modify);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Set the appropriate URL on the request based on the location header
<<<<<<< HEAD
     */
    private function redirectUri(RequestInterface $request, ResponseInterface $response, array $protocols): UriInterface
    {
=======
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array             $protocols
     *
     * @return UriInterface
     */
    private function redirectUri(
        RequestInterface $request,
        ResponseInterface $response,
        array $protocols
    ) {
>>>>>>> parent of 31cfa1b1 (p)
        $location = Psr7\UriResolver::resolve(
            $request->getUri(),
            new Psr7\Uri($response->getHeaderLine('Location'))
        );

        // Ensure that the redirect URI is allowed based on the protocols.
<<<<<<< HEAD
        if (!\in_array($location->getScheme(), $protocols)) {
            throw new BadResponseException(\sprintf('Redirect URI, %s, does not use one of the allowed redirect protocols: %s', $location, \implode(', ', $protocols)), $request, $response);
=======
        if (!in_array($location->getScheme(), $protocols)) {
            throw new BadResponseException(
                sprintf(
                    'Redirect URI, %s, does not use one of the allowed redirect protocols: %s',
                    $location,
                    implode(', ', $protocols)
                ),
                $request,
                $response
            );
>>>>>>> parent of 31cfa1b1 (p)
        }

        return $location;
    }
}
