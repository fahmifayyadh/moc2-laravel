<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace GuzzleHttp\Psr7;

use Psr\Http\Message\MessageInterface;
=======
namespace GuzzleHttp\Psr7;

>>>>>>> parent of 31cfa1b1 (p)
use Psr\Http\Message\StreamInterface;

/**
 * Trait implementing functionality common to requests and responses.
 */
trait MessageTrait
{
<<<<<<< HEAD
    /** @var array<string, string[]> Map of all registered headers, as original name => array of values */
    private $headers = [];

    /** @var array<string, string> Map of lowercase header name => original name at registration */
=======
    /** @var array Map of all registered headers, as original name => array of values */
    private $headers = [];

    /** @var array Map of lowercase header name => original name at registration */
>>>>>>> parent of 31cfa1b1 (p)
    private $headerNames  = [];

    /** @var string */
    private $protocol = '1.1';

    /** @var StreamInterface|null */
    private $stream;

<<<<<<< HEAD
    public function getProtocolVersion(): string
=======
    public function getProtocolVersion()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->protocol;
    }

<<<<<<< HEAD
    public function withProtocolVersion($version): MessageInterface
=======
    public function withProtocolVersion($version)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($this->protocol === $version) {
            return $this;
        }

        $new = clone $this;
        $new->protocol = $version;
        return $new;
    }

<<<<<<< HEAD
    public function getHeaders(): array
=======
    public function getHeaders()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->headers;
    }

<<<<<<< HEAD
    public function hasHeader($header): bool
=======
    public function hasHeader($header)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return isset($this->headerNames[strtolower($header)]);
    }

<<<<<<< HEAD
    public function getHeader($header): array
=======
    public function getHeader($header)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $header = strtolower($header);

        if (!isset($this->headerNames[$header])) {
            return [];
        }

        $header = $this->headerNames[$header];

        return $this->headers[$header];
    }

<<<<<<< HEAD
    public function getHeaderLine($header): string
=======
    public function getHeaderLine($header)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return implode(', ', $this->getHeader($header));
    }

<<<<<<< HEAD
    public function withHeader($header, $value): MessageInterface
=======
    public function withHeader($header, $value)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->assertHeader($header);
        $value = $this->normalizeHeaderValue($value);
        $normalized = strtolower($header);

        $new = clone $this;
        if (isset($new->headerNames[$normalized])) {
            unset($new->headers[$new->headerNames[$normalized]]);
        }
        $new->headerNames[$normalized] = $header;
        $new->headers[$header] = $value;

        return $new;
    }

<<<<<<< HEAD
    public function withAddedHeader($header, $value): MessageInterface
=======
    public function withAddedHeader($header, $value)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->assertHeader($header);
        $value = $this->normalizeHeaderValue($value);
        $normalized = strtolower($header);

        $new = clone $this;
        if (isset($new->headerNames[$normalized])) {
            $header = $this->headerNames[$normalized];
            $new->headers[$header] = array_merge($this->headers[$header], $value);
        } else {
            $new->headerNames[$normalized] = $header;
            $new->headers[$header] = $value;
        }

        return $new;
    }

<<<<<<< HEAD
    public function withoutHeader($header): MessageInterface
=======
    public function withoutHeader($header)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $normalized = strtolower($header);

        if (!isset($this->headerNames[$normalized])) {
            return $this;
        }

        $header = $this->headerNames[$normalized];

        $new = clone $this;
        unset($new->headers[$header], $new->headerNames[$normalized]);

        return $new;
    }

<<<<<<< HEAD
    public function getBody(): StreamInterface
=======
    public function getBody()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!$this->stream) {
            $this->stream = Utils::streamFor('');
        }

        return $this->stream;
    }

<<<<<<< HEAD
    public function withBody(StreamInterface $body): MessageInterface
=======
    public function withBody(StreamInterface $body)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($body === $this->stream) {
            return $this;
        }

        $new = clone $this;
        $new->stream = $body;
        return $new;
    }

<<<<<<< HEAD
    /**
     * @param array<string|int, string|string[]> $headers
     */
    private function setHeaders(array $headers): void
=======
    private function setHeaders(array $headers)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->headerNames = $this->headers = [];
        foreach ($headers as $header => $value) {
            if (is_int($header)) {
                // Numeric array keys are converted to int by PHP but having a header name '123' is not forbidden by the spec
                // and also allowed in withHeader(). So we need to cast it to string again for the following assertion to pass.
                $header = (string) $header;
            }
            $this->assertHeader($header);
            $value = $this->normalizeHeaderValue($value);
            $normalized = strtolower($header);
            if (isset($this->headerNames[$normalized])) {
                $header = $this->headerNames[$normalized];
                $this->headers[$header] = array_merge($this->headers[$header], $value);
            } else {
                $this->headerNames[$normalized] = $header;
                $this->headers[$header] = $value;
            }
        }
    }

<<<<<<< HEAD
    /**
     * @param mixed $value
     *
     * @return string[]
     */
    private function normalizeHeaderValue($value): array
=======
    private function normalizeHeaderValue($value)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!is_array($value)) {
            return $this->trimHeaderValues([$value]);
        }

        if (count($value) === 0) {
            throw new \InvalidArgumentException('Header value can not be an empty array.');
        }

        return $this->trimHeaderValues($value);
    }

    /**
     * Trims whitespace from the header values.
     *
     * Spaces and tabs ought to be excluded by parsers when extracting the field value from a header field.
     *
     * header-field = field-name ":" OWS field-value OWS
     * OWS          = *( SP / HTAB )
     *
<<<<<<< HEAD
     * @param mixed[] $values Header values
=======
     * @param string[] $values Header values
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @return string[] Trimmed header values
     *
     * @see https://tools.ietf.org/html/rfc7230#section-3.2.4
     */
<<<<<<< HEAD
    private function trimHeaderValues(array $values): array
=======
    private function trimHeaderValues(array $values)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return array_map(function ($value) {
            if (!is_scalar($value) && null !== $value) {
                throw new \InvalidArgumentException(sprintf(
                    'Header value must be scalar or null but %s provided.',
                    is_object($value) ? get_class($value) : gettype($value)
                ));
            }

            return trim((string) $value, " \t");
        }, array_values($values));
    }

<<<<<<< HEAD
    /**
     * @see https://tools.ietf.org/html/rfc7230#section-3.2
     *
     * @param mixed $header
     */
    private function assertHeader($header): void
=======
    private function assertHeader($header)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!is_string($header)) {
            throw new \InvalidArgumentException(sprintf(
                'Header name must be a string but %s provided.',
                is_object($header) ? get_class($header) : gettype($header)
            ));
        }

<<<<<<< HEAD
        if (! preg_match('/^[a-zA-Z0-9\'`#$%&*+.^_|~!-]+$/', $header)) {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is not valid header name',
                    $header
                )
            );
=======
        if ($header === '') {
            throw new \InvalidArgumentException('Header name can not be empty.');
>>>>>>> parent of 31cfa1b1 (p)
        }
    }
}
