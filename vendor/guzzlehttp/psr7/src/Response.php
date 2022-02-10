<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Psr7;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * PSR-7 response implementation.
 */
class Response implements ResponseInterface
{
    use MessageTrait;

<<<<<<< HEAD
    /** Map of standard HTTP status code/reason phrases */
    private const PHRASES = [
=======
    /** @var array Map of standard HTTP status code/reason phrases */
    private static $phrases = [
>>>>>>> parent of 31cfa1b1 (p)
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-status',
        208 => 'Already Reported',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => 'Switch Proxy',
        307 => 'Temporary Redirect',
<<<<<<< HEAD
        308 => 'Permanent Redirect',
=======
>>>>>>> parent of 31cfa1b1 (p)
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Time-out',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Large',
        415 => 'Unsupported Media Type',
        416 => 'Requested range not satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Unordered Collection',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        451 => 'Unavailable For Legal Reasons',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Time-out',
        505 => 'HTTP Version not supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
<<<<<<< HEAD
        510 => 'Not Extended',
=======
>>>>>>> parent of 31cfa1b1 (p)
        511 => 'Network Authentication Required',
    ];

    /** @var string */
<<<<<<< HEAD
    private $reasonPhrase;

    /** @var int */
    private $statusCode;

    /**
     * @param int                                  $status  Status code
     * @param array<string, string|string[]>       $headers Response headers
     * @param string|resource|StreamInterface|null $body    Response body
=======
    private $reasonPhrase = '';

    /** @var int */
    private $statusCode = 200;

    /**
     * @param int                                  $status  Status code
     * @param array                                $headers Response headers
     * @param string|null|resource|StreamInterface $body    Response body
>>>>>>> parent of 31cfa1b1 (p)
     * @param string                               $version Protocol version
     * @param string|null                          $reason  Reason phrase (when empty a default will be used based on the status code)
     */
    public function __construct(
<<<<<<< HEAD
        int $status = 200,
        array $headers = [],
        $body = null,
        string $version = '1.1',
        string $reason = null
    ) {
=======
        $status = 200,
        array $headers = [],
        $body = null,
        $version = '1.1',
        $reason = null
    ) {
        $this->assertStatusCodeIsInteger($status);
        $status = (int) $status;
>>>>>>> parent of 31cfa1b1 (p)
        $this->assertStatusCodeRange($status);

        $this->statusCode = $status;

        if ($body !== '' && $body !== null) {
            $this->stream = Utils::streamFor($body);
        }

        $this->setHeaders($headers);
<<<<<<< HEAD
        if ($reason == '' && isset(self::PHRASES[$this->statusCode])) {
            $this->reasonPhrase = self::PHRASES[$this->statusCode];
=======
        if ($reason == '' && isset(self::$phrases[$this->statusCode])) {
            $this->reasonPhrase = self::$phrases[$this->statusCode];
>>>>>>> parent of 31cfa1b1 (p)
        } else {
            $this->reasonPhrase = (string) $reason;
        }

        $this->protocol = $version;
    }

<<<<<<< HEAD
    public function getStatusCode(): int
=======
    public function getStatusCode()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->statusCode;
    }

<<<<<<< HEAD
    public function getReasonPhrase(): string
=======
    public function getReasonPhrase()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->reasonPhrase;
    }

<<<<<<< HEAD
    public function withStatus($code, $reasonPhrase = ''): ResponseInterface
=======
    public function withStatus($code, $reasonPhrase = '')
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->assertStatusCodeIsInteger($code);
        $code = (int) $code;
        $this->assertStatusCodeRange($code);

        $new = clone $this;
        $new->statusCode = $code;
<<<<<<< HEAD
        if ($reasonPhrase == '' && isset(self::PHRASES[$new->statusCode])) {
            $reasonPhrase = self::PHRASES[$new->statusCode];
=======
        if ($reasonPhrase == '' && isset(self::$phrases[$new->statusCode])) {
            $reasonPhrase = self::$phrases[$new->statusCode];
>>>>>>> parent of 31cfa1b1 (p)
        }
        $new->reasonPhrase = (string) $reasonPhrase;
        return $new;
    }

<<<<<<< HEAD
    /**
     * @param mixed $statusCode
     */
    private function assertStatusCodeIsInteger($statusCode): void
=======
    private function assertStatusCodeIsInteger($statusCode)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (filter_var($statusCode, FILTER_VALIDATE_INT) === false) {
            throw new \InvalidArgumentException('Status code must be an integer value.');
        }
    }

<<<<<<< HEAD
    private function assertStatusCodeRange(int $statusCode): void
=======
    private function assertStatusCodeRange($statusCode)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($statusCode < 100 || $statusCode >= 600) {
            throw new \InvalidArgumentException('Status code must be an integer value between 1xx and 5xx.');
        }
    }
}
