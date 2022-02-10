<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use InvalidArgumentException;
use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use phpDocumentor\Reflection\Types\Mixed_;
use phpDocumentor\Reflection\Types\Void_;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function array_keys;
use function explode;
use function implode;
use function is_string;
use function preg_match;
use function sort;
use function strpos;
use function substr;
use function trim;
use function var_export;

/**
 * Reflection class for an {@}method in a Docblock.
 */
final class Method extends BaseTag implements Factory\StaticMethod
{
    /** @var string */
    protected $name = 'method';

    /** @var string */
    private $methodName;

    /**
     * @phpstan-var array<int, array{name: string, type: Type}>
     * @var array<int, array<string, Type|string>>
     */
    private $arguments;

    /** @var bool */
    private $isStatic;

    /** @var Type */
    private $returnType;

    /**
     * @param array<int, array<string, Type|string>> $arguments
<<<<<<< HEAD
=======
     *
>>>>>>> parent of 31cfa1b1 (p)
     * @phpstan-param array<int, array{name: string, type: Type}|string> $arguments
     */
    public function __construct(
        string $methodName,
        array $arguments = [],
        ?Type $returnType = null,
        bool $static = false,
        ?Description $description = null
    ) {
        Assert::stringNotEmpty($methodName);

        if ($returnType === null) {
            $returnType = new Void_();
        }

        $this->methodName  = $methodName;
        $this->arguments   = $this->filterArguments($arguments);
        $this->returnType  = $returnType;
        $this->isStatic    = $static;
        $this->description = $description;
    }

    public static function create(
        string $body,
        ?TypeResolver $typeResolver = null,
        ?DescriptionFactory $descriptionFactory = null,
        ?TypeContext $context = null
<<<<<<< HEAD
    ): ?self {
=======
    ) : ?self {
>>>>>>> parent of 31cfa1b1 (p)
        Assert::stringNotEmpty($body);
        Assert::notNull($typeResolver);
        Assert::notNull($descriptionFactory);

        // 1. none or more whitespace
        // 2. optionally the keyword "static" followed by whitespace
        // 3. optionally a word with underscores followed by whitespace : as
        //    type for the return value
        // 4. then optionally a word with underscores followed by () and
        //    whitespace : as method name as used by phpDocumentor
        // 5. then a word with underscores, followed by ( and any character
        //    until a ) and whitespace : as method name with signature
        // 6. any remaining text : as description
<<<<<<< HEAD
        if (
            !preg_match(
                '/^
=======
        if (!preg_match(
            '/^
>>>>>>> parent of 31cfa1b1 (p)
                # Static keyword
                # Declares a static method ONLY if type is also present
                (?:
                    (static)
                    \s+
                )?
                # Return type
                (?:
                    (
                        (?:[\w\|_\\\\]*\$this[\w\|_\\\\]*)
                        |
                        (?:
                            (?:[\w\|_\\\\]+)
                            # array notation
                            (?:\[\])*
                        )*+
                    )
                    \s+
                )?
                # Method name
                ([\w_]+)
                # Arguments
                (?:
                    \(([^\)]*)\)
                )?
                \s*
                # Description
                (.*)
            $/sux',
<<<<<<< HEAD
                $body,
                $matches
            )
        ) {
=======
            $body,
            $matches
        )) {
>>>>>>> parent of 31cfa1b1 (p)
            return null;
        }

        [, $static, $returnType, $methodName, $argumentLines, $description] = $matches;

        $static = $static === 'static';

        if ($returnType === '') {
            $returnType = 'void';
        }

        $returnType  = $typeResolver->resolve($returnType, $context);
        $description = $descriptionFactory->create($description, $context);

        /** @phpstan-var array<int, array{name: string, type: Type}> $arguments */
        $arguments = [];
        if ($argumentLines !== '') {
            $argumentsExploded = explode(',', $argumentLines);
            foreach ($argumentsExploded as $argument) {
                $argument = explode(' ', self::stripRestArg(trim($argument)), 2);
                if (strpos($argument[0], '$') === 0) {
                    $argumentName = substr($argument[0], 1);
                    $argumentType = new Mixed_();
                } else {
                    $argumentType = $typeResolver->resolve($argument[0], $context);
                    $argumentName = '';
                    if (isset($argument[1])) {
                        $argument[1]  = self::stripRestArg($argument[1]);
                        $argumentName = substr($argument[1], 1);
                    }
                }

                $arguments[] = ['name' => $argumentName, 'type' => $argumentType];
            }
        }

        return new static($methodName, $arguments, $returnType, $static, $description);
    }

    /**
     * Retrieves the method name.
     */
<<<<<<< HEAD
    public function getMethodName(): string
=======
    public function getMethodName() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->methodName;
    }

    /**
     * @return array<int, array<string, Type|string>>
<<<<<<< HEAD
     * @phpstan-return array<int, array{name: string, type: Type}>
     */
    public function getArguments(): array
=======
     *
     * @phpstan-return array<int, array{name: string, type: Type}>
     */
    public function getArguments() : array
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->arguments;
    }

    /**
     * Checks whether the method tag describes a static method or not.
     *
     * @return bool TRUE if the method declaration is for a static method, FALSE otherwise.
     */
<<<<<<< HEAD
    public function isStatic(): bool
=======
    public function isStatic() : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->isStatic;
    }

<<<<<<< HEAD
    public function getReturnType(): Type
=======
    public function getReturnType() : Type
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->returnType;
    }

<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        $arguments = [];
        foreach ($this->arguments as $argument) {
            $arguments[] = $argument['type'] . ' $' . $argument['name'];
        }

        $argumentStr = '(' . implode(', ', $arguments) . ')';

        if ($this->description) {
            $description = $this->description->render();
        } else {
            $description = '';
        }

        $static = $this->isStatic ? 'static' : '';

        $returnType = (string) $this->returnType;

<<<<<<< HEAD
        $methodName = $this->methodName;
=======
        $methodName = (string) $this->methodName;
>>>>>>> parent of 31cfa1b1 (p)

        return $static
            . ($returnType !== '' ? ($static !== '' ? ' ' : '') . $returnType : '')
            . ($methodName !== '' ? ($static !== '' || $returnType !== '' ? ' ' : '') . $methodName : '')
            . $argumentStr
            . ($description !== '' ? ' ' . $description : '');
    }

    /**
     * @param mixed[][]|string[] $arguments
<<<<<<< HEAD
     * @phpstan-param array<int, array{name: string, type: Type}|string> $arguments
     *
     * @return mixed[][]
     * @phpstan-return array<int, array{name: string, type: Type}>
     */
    private function filterArguments(array $arguments = []): array
=======
     *
     * @return mixed[][]
     *
     * @phpstan-param array<int, array{name: string, type: Type}|string> $arguments
     * @phpstan-return array<int, array{name: string, type: Type}>
     */
    private function filterArguments(array $arguments = []) : array
>>>>>>> parent of 31cfa1b1 (p)
    {
        $result = [];
        foreach ($arguments as $argument) {
            if (is_string($argument)) {
                $argument = ['name' => $argument];
            }

            if (!isset($argument['type'])) {
                $argument['type'] = new Mixed_();
            }

            $keys = array_keys($argument);
            sort($keys);
            if ($keys !== ['name', 'type']) {
                throw new InvalidArgumentException(
                    'Arguments can only have the "name" and "type" fields, found: ' . var_export($keys, true)
                );
            }

            $result[] = $argument;
        }

        return $result;
    }

<<<<<<< HEAD
    private static function stripRestArg(string $argument): string
=======
    private static function stripRestArg(string $argument) : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (strpos($argument, '...') === 0) {
            $argument = trim(substr($argument, 3));
        }

        return $argument;
    }
}
