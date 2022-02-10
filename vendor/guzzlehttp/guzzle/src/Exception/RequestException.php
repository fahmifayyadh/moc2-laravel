<?php
<<<<<<< HEAD

namespace GuzzleHttp\Exception;

use GuzzleHttp\BodySummarizer;
use GuzzleHttp\BodySummarizerInterface;
use Psr\Http\Client\RequestExceptionInterface;
=======
namespace GuzzleHttp\Exception;

use GuzzleHttp\Promise\PromiseInterface;
>>>>>>> parent of 31cfa1b1 (p)
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * HTTP Request exception
 */
<<<<<<< HEAD
class RequestException extends TransferException implements RequestExceptionInterface
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var ResponseInterface|null
     */
    private $response;

    /**
     * @var array
     */
    private $handlerContext;

    public function __construct(
        string $message,
        RequestInterface $request,
        ResponseInterface $response = null,
        \Throwable $previous = null,
        array $handlerContext = []
    ) {
        // Set the code of the exception if the response is set and not future.
        $code = $response ? $response->getStatusCode() : 0;
=======
class RequestException extends TransferException
{
    /** @var RequestInterface */
    private $request;

    /** @var ResponseInterface|null */
    private $response;

    /** @var array */
    private $handlerContext;

    public function __construct(
        $message,
        RequestInterface $request,
        ResponseInterface $response = null,
        \Exception $previous = null,
        array $handlerContext = []
    ) {
        // Set the code of the exception if the response is set and not future.
        $code = $response && !($response instanceof PromiseInterface)
            ? $response->getStatusCode()
            : 0;
>>>>>>> parent of 31cfa1b1 (p)
        parent::__construct($message, $code, $previous);
        $this->request = $request;
        $this->response = $response;
        $this->handlerContext = $handlerContext;
    }

    /**
     * Wrap non-RequestExceptions with a RequestException
<<<<<<< HEAD
     */
    public static function wrapException(RequestInterface $request, \Throwable $e): RequestException
    {
        return $e instanceof RequestException ? $e : new RequestException($e->getMessage(), $request, null, $e);
=======
     *
     * @param RequestInterface $request
     * @param \Exception       $e
     *
     * @return RequestException
     */
    public static function wrapException(RequestInterface $request, \Exception $e)
    {
        return $e instanceof RequestException
            ? $e
            : new RequestException($e->getMessage(), $request, null, $e);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Factory method to create a new exception with a normalized error message
     *
<<<<<<< HEAD
     * @param RequestInterface             $request        Request sent
     * @param ResponseInterface            $response       Response received
     * @param \Throwable|null              $previous       Previous exception
     * @param array                        $handlerContext Optional handler context
     * @param BodySummarizerInterface|null $bodySummarizer Optional body summarizer
=======
     * @param RequestInterface  $request  Request
     * @param ResponseInterface $response Response received
     * @param \Exception        $previous Previous exception
     * @param array             $ctx      Optional handler context.
     *
     * @return self
>>>>>>> parent of 31cfa1b1 (p)
     */
    public static function create(
        RequestInterface $request,
        ResponseInterface $response = null,
<<<<<<< HEAD
        \Throwable $previous = null,
        array $handlerContext = [],
        BodySummarizerInterface $bodySummarizer = null
    ): self {
=======
        \Exception $previous = null,
        array $ctx = []
    ) {
>>>>>>> parent of 31cfa1b1 (p)
        if (!$response) {
            return new self(
                'Error completing request',
                $request,
                null,
                $previous,
<<<<<<< HEAD
                $handlerContext
            );
        }

        $level = (int) \floor($response->getStatusCode() / 100);
=======
                $ctx
            );
        }

        $level = (int) floor($response->getStatusCode() / 100);
>>>>>>> parent of 31cfa1b1 (p)
        if ($level === 4) {
            $label = 'Client error';
            $className = ClientException::class;
        } elseif ($level === 5) {
            $label = 'Server error';
            $className = ServerException::class;
        } else {
            $label = 'Unsuccessful request';
            $className = __CLASS__;
        }

        $uri = $request->getUri();
        $uri = static::obfuscateUri($uri);

        // Client Error: `GET /` resulted in a `404 Not Found` response:
        // <html> ... (truncated)
<<<<<<< HEAD
        $message = \sprintf(
            '%s: `%s %s` resulted in a `%s %s` response',
            $label,
            $request->getMethod(),
            $uri->__toString(),
=======
        $message = sprintf(
            '%s: `%s %s` resulted in a `%s %s` response',
            $label,
            $request->getMethod(),
            $uri,
>>>>>>> parent of 31cfa1b1 (p)
            $response->getStatusCode(),
            $response->getReasonPhrase()
        );

<<<<<<< HEAD
        $summary = ($bodySummarizer ?? new BodySummarizer())->summarize($response);
=======
        $summary = static::getResponseBodySummary($response);
>>>>>>> parent of 31cfa1b1 (p)

        if ($summary !== null) {
            $message .= ":\n{$summary}\n";
        }

<<<<<<< HEAD
        return new $className($message, $request, $response, $previous, $handlerContext);
=======
        return new $className($message, $request, $response, $previous, $ctx);
    }

    /**
     * Get a short summary of the response
     *
     * Will return `null` if the response is not printable.
     *
     * @param ResponseInterface $response
     *
     * @return string|null
     */
    public static function getResponseBodySummary(ResponseInterface $response)
    {
        return \GuzzleHttp\Psr7\get_message_body_summary($response);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Obfuscates URI if there is a username and a password present
<<<<<<< HEAD
     */
    private static function obfuscateUri(UriInterface $uri): UriInterface
    {
        $userInfo = $uri->getUserInfo();

        if (false !== ($pos = \strpos($userInfo, ':'))) {
            return $uri->withUserInfo(\substr($userInfo, 0, $pos), '***');
=======
     *
     * @param UriInterface $uri
     *
     * @return UriInterface
     */
    private static function obfuscateUri(UriInterface $uri)
    {
        $userInfo = $uri->getUserInfo();

        if (false !== ($pos = strpos($userInfo, ':'))) {
            return $uri->withUserInfo(substr($userInfo, 0, $pos), '***');
>>>>>>> parent of 31cfa1b1 (p)
        }

        return $uri;
    }

    /**
     * Get the request that caused the exception
<<<<<<< HEAD
     */
    public function getRequest(): RequestInterface
=======
     *
     * @return RequestInterface
     */
    public function getRequest()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->request;
    }

    /**
     * Get the associated response
<<<<<<< HEAD
     */
    public function getResponse(): ?ResponseInterface
=======
     *
     * @return ResponseInterface|null
     */
    public function getResponse()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->response;
    }

    /**
     * Check if a response was received
<<<<<<< HEAD
     */
    public function hasResponse(): bool
=======
     *
     * @return bool
     */
    public function hasResponse()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->response !== null;
    }

    /**
     * Get contextual information about the error from the underlying handler.
     *
     * The contents of this array will vary depending on which handler you are
     * using. It may also be just an empty array. Relying on this data will
     * couple you to a specific handler, but can give more debug information
     * when needed.
<<<<<<< HEAD
     */
    public function getHandlerContext(): array
=======
     *
     * @return array
     */
    public function getHandlerContext()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->handlerContext;
    }
}
