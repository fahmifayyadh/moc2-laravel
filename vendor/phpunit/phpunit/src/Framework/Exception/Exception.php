<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

<<<<<<< HEAD
use function array_keys;
use function get_object_vars;
use PHPUnit\Util\Filter;
use RuntimeException;
use Throwable;
=======
use PHPUnit\Util\Filter;
>>>>>>> parent of 31cfa1b1 (p)

/**
 * Base class for all PHPUnit Framework exceptions.
 *
 * Ensures that exceptions thrown during a test run do not leave stray
 * references behind.
 *
 * Every Exception contains a stack trace. Each stack frame contains the 'args'
 * of the called function. The function arguments can contain references to
 * instantiated objects. The references prevent the objects from being
 * destructed (until test results are eventually printed), so memory cannot be
 * freed up.
 *
 * With enabled process isolation, test results are serialized in the child
 * process and unserialized in the parent process. The stack trace of Exceptions
 * may contain objects that cannot be serialized or unserialized (e.g., PDO
 * connections). Unserializing user-space objects from the child process into
 * the parent would break the intended encapsulation of process isolation.
 *
 * @see http://fabien.potencier.org/article/9/php-serialization-stack-traces-and-exceptions
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
<<<<<<< HEAD
class Exception extends RuntimeException implements \PHPUnit\Exception
=======
class Exception extends \RuntimeException implements \PHPUnit\Exception
>>>>>>> parent of 31cfa1b1 (p)
{
    /**
     * @var array
     */
    protected $serializableTrace;

<<<<<<< HEAD
    public function __construct($message = '', $code = 0, Throwable $previous = null)
=======
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
>>>>>>> parent of 31cfa1b1 (p)
    {
        parent::__construct($message, $code, $previous);

        $this->serializableTrace = $this->getTrace();

<<<<<<< HEAD
        foreach (array_keys($this->serializableTrace) as $key) {
=======
        foreach (\array_keys($this->serializableTrace) as $key) {
>>>>>>> parent of 31cfa1b1 (p)
            unset($this->serializableTrace[$key]['args']);
        }
    }

    public function __toString(): string
    {
        $string = TestFailure::exceptionToString($this);

        if ($trace = Filter::getFilteredStacktrace($this)) {
            $string .= "\n" . $trace;
        }

        return $string;
    }

    public function __sleep(): array
    {
<<<<<<< HEAD
        return array_keys(get_object_vars($this));
=======
        return \array_keys(\get_object_vars($this));
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Returns the serializable trace (without 'args').
     */
    public function getSerializableTrace(): array
    {
        return $this->serializableTrace;
    }
}
