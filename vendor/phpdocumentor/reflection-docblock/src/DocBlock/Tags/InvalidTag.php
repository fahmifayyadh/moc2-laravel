<?php

declare(strict_types=1);

namespace phpDocumentor\Reflection\DocBlock\Tags;

use Closure;
use Exception;
use phpDocumentor\Reflection\DocBlock\Tag;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use Throwable;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function array_map;
use function get_class;
use function get_resource_type;
use function is_array;
use function is_object;
use function is_resource;
use function sprintf;

/**
 * This class represents an exception during the tag creation
 *
 * Since the internals of the library are relaying on the correct syntax of a docblock
 * we cannot simply throw exceptions at all time because the exceptions will break the creation of a
 * docklock. Just silently ignore the exceptions is not an option because the user as an issue to fix.
 *
 * This tag holds that error information until a using application is able to display it. The object wil just behave
 * like any normal tag. So the normal application flow will not break.
 */
final class InvalidTag implements Tag
{
    /** @var string */
    private $name;

    /** @var string */
    private $body;

    /** @var Throwable|null */
    private $throwable;

    private function __construct(string $name, string $body)
    {
        $this->name = $name;
        $this->body = $body;
    }

<<<<<<< HEAD
    public function getException(): ?Throwable
=======
    public function getException() : ?Throwable
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->throwable;
    }

<<<<<<< HEAD
    public function getName(): string
=======
    public function getName() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->name;
    }

<<<<<<< HEAD
    public static function create(string $body, string $name = ''): self
=======
    public static function create(string $body, string $name = '') : self
>>>>>>> parent of 31cfa1b1 (p)
    {
        return new self($name, $body);
    }

<<<<<<< HEAD
    public function withError(Throwable $exception): self
=======
    public function withError(Throwable $exception) : self
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->flattenExceptionBacktrace($exception);
        $tag            = new self($this->name, $this->body);
        $tag->throwable = $exception;

        return $tag;
    }

    /**
     * Removes all complex types from backtrace
     *
     * Not all objects are serializable. So we need to remove them from the
     * stored exception to be sure that we do not break existing library usage.
     */
<<<<<<< HEAD
    private function flattenExceptionBacktrace(Throwable $exception): void
=======
    private function flattenExceptionBacktrace(Throwable $exception) : void
>>>>>>> parent of 31cfa1b1 (p)
    {
        $traceProperty = (new ReflectionClass(Exception::class))->getProperty('trace');
        $traceProperty->setAccessible(true);

        do {
            $trace = $exception->getTrace();
            if (isset($trace[0]['args'])) {
                $trace = array_map(
<<<<<<< HEAD
                    function (array $call): array {
                        $call['args'] = array_map([$this, 'flattenArguments'], $call['args'] ?? []);
=======
                    function (array $call) : array {
                        $call['args'] = array_map([$this, 'flattenArguments'], $call['args']);
>>>>>>> parent of 31cfa1b1 (p)

                        return $call;
                    },
                    $trace
                );
            }

            $traceProperty->setValue($exception, $trace);
            $exception = $exception->getPrevious();
        } while ($exception !== null);

        $traceProperty->setAccessible(false);
    }

    /**
     * @param mixed $value
     *
     * @return mixed
     *
     * @throws ReflectionException
     */
    private function flattenArguments($value)
    {
        if ($value instanceof Closure) {
            $closureReflection = new ReflectionFunction($value);
            $value             = sprintf(
                '(Closure at %s:%s)',
                $closureReflection->getFileName(),
                $closureReflection->getStartLine()
            );
        } elseif (is_object($value)) {
            $value = sprintf('object(%s)', get_class($value));
        } elseif (is_resource($value)) {
            $value = sprintf('resource(%s)', get_resource_type($value));
        } elseif (is_array($value)) {
            $value = array_map([$this, 'flattenArguments'], $value);
        }

        return $value;
    }

<<<<<<< HEAD
    public function render(?Formatter $formatter = null): string
=======
    public function render(?Formatter $formatter = null) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($formatter === null) {
            $formatter = new Formatter\PassthroughFormatter();
        }

        return $formatter->format($this);
    }

<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->body;
    }
}
