<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use InvalidArgumentException;
use Psr\Http\Message\ServerRequestInterface;
<<<<<<< HEAD
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UploadedFileInterface;
use Psr\Http\Message\UriInterface;
=======
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UploadedFileInterface;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Server-side HTTP request
 *
 * Extends the Request definition to add methods for accessing incoming data,
 * specifically server parameters, cookies, matched path parameters, query
 * string arguments, body parameters, and upload file information.
 *
 * "Attributes" are discovered via decomposing the request (and usually
 * specifically the URI path), and typically will be injected by the application.
 *
 * Requests are considered immutable; all methods that might change state are
 * implemented such that they retain the internal state of the current
 * message and return a new instance that contains the changed state.
 */
class ServerRequest extends Request implements ServerRequestInterface
{
    /**
     * @var array
     */
    private $attributes = [];

    /**
     * @var array
     */
    private $cookieParams = [];

    /**
<<<<<<< HEAD
     * @var array|object|null
=======
     * @var null|array|object
>>>>>>> parent of 31cfa1b1 (p)
     */
    private $parsedBody;

    /**
     * @var array
     */
    private $queryParams = [];

    /**
     * @var array
     */
    private $serverParams;

    /**
     * @var array
     */
    private $uploadedFiles = [];

    /**
     * @param string                               $method       HTTP method
     * @param string|UriInterface                  $uri          URI
<<<<<<< HEAD
     * @param array<string, string|string[]>       $headers      Request headers
     * @param string|resource|StreamInterface|null $body         Request body
=======
     * @param array                                $headers      Request headers
     * @param string|null|resource|StreamInterface $body         Request body
>>>>>>> parent of 31cfa1b1 (p)
     * @param string                               $version      Protocol version
     * @param array                                $serverParams Typically the $_SERVER superglobal
     */
    public function __construct(
<<<<<<< HEAD
        string $method,
        $uri,
        array $headers = [],
        $body = null,
        string $version = '1.1',
=======
        $method,
        $uri,
        array $headers = [],
        $body = null,
        $version = '1.1',
>>>>>>> parent of 31cfa1b1 (p)
        array $serverParams = []
    ) {
        $this->serverParams = $serverParams;

        parent::__construct($method, $uri, $headers, $body, $version);
    }

    /**
     * Return an UploadedFile instance array.
     *
     * @param array $files A array which respect $_FILES structure
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException for unrecognized values
     */
    public static function normalizeFiles(array $files): array
=======
     * @return array
     *
     * @throws InvalidArgumentException for unrecognized values
     */
    public static function normalizeFiles(array $files)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $normalized = [];

        foreach ($files as $key => $value) {
            if ($value instanceof UploadedFileInterface) {
                $normalized[$key] = $value;
            } elseif (is_array($value) && isset($value['tmp_name'])) {
                $normalized[$key] = self::createUploadedFileFromSpec($value);
            } elseif (is_array($value)) {
                $normalized[$key] = self::normalizeFiles($value);
                continue;
            } else {
                throw new InvalidArgumentException('Invalid value in files specification');
            }
        }

        return $normalized;
    }

    /**
     * Create and return an UploadedFile instance from a $_FILES specification.
     *
     * If the specification represents an array of values, this method will
     * delegate to normalizeNestedFileSpec() and return that return value.
     *
     * @param array $value $_FILES struct
<<<<<<< HEAD
     *
     * @return UploadedFileInterface|UploadedFileInterface[]
=======
     * @return array|UploadedFileInterface
>>>>>>> parent of 31cfa1b1 (p)
     */
    private static function createUploadedFileFromSpec(array $value)
    {
        if (is_array($value['tmp_name'])) {
            return self::normalizeNestedFileSpec($value);
        }

        return new UploadedFile(
            $value['tmp_name'],
            (int) $value['size'],
            (int) $value['error'],
            $value['name'],
            $value['type']
        );
    }

    /**
     * Normalize an array of file specifications.
     *
     * Loops through all nested files and returns a normalized array of
     * UploadedFileInterface instances.
     *
<<<<<<< HEAD
     * @return UploadedFileInterface[]
     */
    private static function normalizeNestedFileSpec(array $files = []): array
=======
     * @param array $files
     * @return UploadedFileInterface[]
     */
    private static function normalizeNestedFileSpec(array $files = [])
>>>>>>> parent of 31cfa1b1 (p)
    {
        $normalizedFiles = [];

        foreach (array_keys($files['tmp_name']) as $key) {
            $spec = [
                'tmp_name' => $files['tmp_name'][$key],
                'size'     => $files['size'][$key],
                'error'    => $files['error'][$key],
                'name'     => $files['name'][$key],
                'type'     => $files['type'][$key],
            ];
            $normalizedFiles[$key] = self::createUploadedFileFromSpec($spec);
        }

        return $normalizedFiles;
    }

    /**
     * Return a ServerRequest populated with superglobals:
     * $_GET
     * $_POST
     * $_COOKIE
     * $_FILES
     * $_SERVER
<<<<<<< HEAD
     */
    public static function fromGlobals(): ServerRequestInterface
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
=======
     *
     * @return ServerRequestInterface
     */
    public static function fromGlobals()
    {
        $method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
>>>>>>> parent of 31cfa1b1 (p)
        $headers = getallheaders();
        $uri = self::getUriFromGlobals();
        $body = new CachingStream(new LazyOpenStream('php://input', 'r+'));
        $protocol = isset($_SERVER['SERVER_PROTOCOL']) ? str_replace('HTTP/', '', $_SERVER['SERVER_PROTOCOL']) : '1.1';

        $serverRequest = new ServerRequest($method, $uri, $headers, $body, $protocol, $_SERVER);

        return $serverRequest
            ->withCookieParams($_COOKIE)
            ->withQueryParams($_GET)
            ->withParsedBody($_POST)
            ->withUploadedFiles(self::normalizeFiles($_FILES));
    }

<<<<<<< HEAD
    private static function extractHostAndPortFromAuthority(string $authority): array
    {
        $uri = 'http://' . $authority;
=======
    private static function extractHostAndPortFromAuthority($authority)
    {
        $uri = 'http://'.$authority;
>>>>>>> parent of 31cfa1b1 (p)
        $parts = parse_url($uri);
        if (false === $parts) {
            return [null, null];
        }

<<<<<<< HEAD
        $host = $parts['host'] ?? null;
        $port = $parts['port'] ?? null;
=======
        $host = isset($parts['host']) ? $parts['host'] : null;
        $port = isset($parts['port']) ? $parts['port'] : null;
>>>>>>> parent of 31cfa1b1 (p)

        return [$host, $port];
    }

    /**
     * Get a Uri populated with values from $_SERVER.
<<<<<<< HEAD
     */
    public static function getUriFromGlobals(): UriInterface
=======
     *
     * @return UriInterface
     */
    public static function getUriFromGlobals()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $uri = new Uri('');

        $uri = $uri->withScheme(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http');

        $hasPort = false;
        if (isset($_SERVER['HTTP_HOST'])) {
<<<<<<< HEAD
            [$host, $port] = self::extractHostAndPortFromAuthority($_SERVER['HTTP_HOST']);
=======
            list($host, $port) = self::extractHostAndPortFromAuthority($_SERVER['HTTP_HOST']);
>>>>>>> parent of 31cfa1b1 (p)
            if ($host !== null) {
                $uri = $uri->withHost($host);
            }

            if ($port !== null) {
                $hasPort = true;
                $uri = $uri->withPort($port);
            }
        } elseif (isset($_SERVER['SERVER_NAME'])) {
            $uri = $uri->withHost($_SERVER['SERVER_NAME']);
        } elseif (isset($_SERVER['SERVER_ADDR'])) {
            $uri = $uri->withHost($_SERVER['SERVER_ADDR']);
        }

        if (!$hasPort && isset($_SERVER['SERVER_PORT'])) {
            $uri = $uri->withPort($_SERVER['SERVER_PORT']);
        }

        $hasQuery = false;
        if (isset($_SERVER['REQUEST_URI'])) {
            $requestUriParts = explode('?', $_SERVER['REQUEST_URI'], 2);
            $uri = $uri->withPath($requestUriParts[0]);
            if (isset($requestUriParts[1])) {
                $hasQuery = true;
                $uri = $uri->withQuery($requestUriParts[1]);
            }
        }

        if (!$hasQuery && isset($_SERVER['QUERY_STRING'])) {
            $uri = $uri->withQuery($_SERVER['QUERY_STRING']);
        }

        return $uri;
    }

<<<<<<< HEAD
    public function getServerParams(): array
=======

    /**
     * {@inheritdoc}
     */
    public function getServerParams()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->serverParams;
    }

<<<<<<< HEAD
    public function getUploadedFiles(): array
=======
    /**
     * {@inheritdoc}
     */
    public function getUploadedFiles()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->uploadedFiles;
    }

<<<<<<< HEAD
    public function withUploadedFiles(array $uploadedFiles): ServerRequestInterface
=======
    /**
     * {@inheritdoc}
     */
    public function withUploadedFiles(array $uploadedFiles)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $new = clone $this;
        $new->uploadedFiles = $uploadedFiles;

        return $new;
    }

<<<<<<< HEAD
    public function getCookieParams(): array
=======
    /**
     * {@inheritdoc}
     */
    public function getCookieParams()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->cookieParams;
    }

<<<<<<< HEAD
    public function withCookieParams(array $cookies): ServerRequestInterface
=======
    /**
     * {@inheritdoc}
     */
    public function withCookieParams(array $cookies)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $new = clone $this;
        $new->cookieParams = $cookies;

        return $new;
    }

<<<<<<< HEAD
    public function getQueryParams(): array
=======
    /**
     * {@inheritdoc}
     */
    public function getQueryParams()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->queryParams;
    }

<<<<<<< HEAD
    public function withQueryParams(array $query): ServerRequestInterface
=======
    /**
     * {@inheritdoc}
     */
    public function withQueryParams(array $query)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $new = clone $this;
        $new->queryParams = $query;

        return $new;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return array|object|null
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function getParsedBody()
    {
        return $this->parsedBody;
    }

<<<<<<< HEAD
    public function withParsedBody($data): ServerRequestInterface
=======
    /**
     * {@inheritdoc}
     */
    public function withParsedBody($data)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $new = clone $this;
        $new->parsedBody = $data;

        return $new;
    }

<<<<<<< HEAD
    public function getAttributes(): array
=======
    /**
     * {@inheritdoc}
     */
    public function getAttributes()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->attributes;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return mixed
=======
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function getAttribute($attribute, $default = null)
    {
        if (false === array_key_exists($attribute, $this->attributes)) {
            return $default;
        }

        return $this->attributes[$attribute];
    }

<<<<<<< HEAD
    public function withAttribute($attribute, $value): ServerRequestInterface
=======
    /**
     * {@inheritdoc}
     */
    public function withAttribute($attribute, $value)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $new = clone $this;
        $new->attributes[$attribute] = $value;

        return $new;
    }

<<<<<<< HEAD
    public function withoutAttribute($attribute): ServerRequestInterface
=======
    /**
     * {@inheritdoc}
     */
    public function withoutAttribute($attribute)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (false === array_key_exists($attribute, $this->attributes)) {
            return $this;
        }

        $new = clone $this;
        unset($new->attributes[$attribute]);

        return $new;
    }
}
