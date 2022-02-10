<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use phpDocumentor\Reflection\Utils;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use function array_shift;
use function array_unshift;
use function implode;
use function strpos;
use function substr;
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
use const PREG_SPLIT_DELIM_CAPTURE;

/**
 * Reflection class for the {@}param tag in a Docblock.
 */
final class Param extends TagWithType implements Factory\StaticMethod
{
    /** @var string|null */
    private $variableName;

    /** @var bool determines whether this is a variadic argument */
    private $isVariadic;

    /** @var bool determines whether this is passed by reference */
    private $isReference;

    public function __construct(
        ?string $variableName,
        ?Type $type = null,
        bool $isVariadic = false,
        ?Description $description = null,
        bool $isReference = false
    ) {
        $this->name         = 'param';
        $this->variableName = $variableName;
        $this->type         = $type;
        $this->isVariadic   = $isVariadic;
        $this->description  = $description;
        $this->isReference  = $isReference;
    }

    public static function create(
        string $body,
        ?TypeResolver $typeResolver = null,
        ?DescriptionFactory $descriptionFactory = null,
        ?TypeContext $context = null
<<<<<<< HEAD
    ): self {
=======
    ) : self {
>>>>>>> parent of 31cfa1b1 (p)
        Assert::stringNotEmpty($body);
        Assert::notNull($typeResolver);
        Assert::notNull($descriptionFactory);

        [$firstPart, $body] = self::extractTypeFromBody($body);

        $type         = null;
        $parts        = Utils::pregSplit('/(\s+)/Su', $body, 2, PREG_SPLIT_DELIM_CAPTURE);
        $variableName = '';
        $isVariadic   = false;
        $isReference   = false;

        // if the first item that is encountered is not a variable; it is a type
        if ($firstPart && !self::strStartsWithVariable($firstPart)) {
            $type = $typeResolver->resolve($firstPart, $context);
        } else {
            // first part is not a type; we should prepend it to the parts array for further processing
            array_unshift($parts, $firstPart);
        }

        // if the next item starts with a $ or ...$ or &$ or &...$ it must be the variable name
        if (isset($parts[0]) && self::strStartsWithVariable($parts[0])) {
            $variableName = array_shift($parts);
            if ($type) {
                array_shift($parts);
            }

            Assert::notNull($variableName);

            if (strpos($variableName, '$') === 0) {
                $variableName = substr($variableName, 1);
            } elseif (strpos($variableName, '&$') === 0) {
                $isReference = true;
                $variableName = substr($variableName, 2);
            } elseif (strpos($variableName, '...$') === 0) {
                $isVariadic = true;
                $variableName = substr($variableName, 4);
            } elseif (strpos($variableName, '&...$') === 0) {
                $isVariadic   = true;
                $isReference  = true;
                $variableName = substr($variableName, 5);
            }
        }

        $description = $descriptionFactory->create(implode('', $parts), $context);

        return new static($variableName, $type, $isVariadic, $description, $isReference);
    }

    /**
     * Returns the variable's name.
     */
<<<<<<< HEAD
    public function getVariableName(): ?string
=======
    public function getVariableName() : ?string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->variableName;
    }

    /**
     * Returns whether this tag is variadic.
     */
<<<<<<< HEAD
    public function isVariadic(): bool
=======
    public function isVariadic() : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->isVariadic;
    }

    /**
     * Returns whether this tag is passed by reference.
     */
<<<<<<< HEAD
    public function isReference(): bool
=======
    public function isReference() : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->isReference;
    }

    /**
     * Returns a string representation for this tag.
     */
<<<<<<< HEAD
    public function __toString(): string
=======
    public function __toString() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        if ($this->description) {
            $description = $this->description->render();
        } else {
            $description = '';
        }

        $variableName = '';
        if ($this->variableName) {
            $variableName .= ($this->isReference ? '&' : '') . ($this->isVariadic ? '...' : '');
            $variableName .= '$' . $this->variableName;
        }

        $type = (string) $this->type;

        return $type
            . ($variableName !== '' ? ($type !== '' ? ' ' : '') . $variableName : '')
            . ($description !== '' ? ($type !== '' || $variableName !== '' ? ' ' : '') . $description : '');
    }

<<<<<<< HEAD
    private static function strStartsWithVariable(string $str): bool
=======
    private static function strStartsWithVariable(string $str) : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return strpos($str, '$') === 0
               ||
               strpos($str, '...$') === 0
               ||
               strpos($str, '&$') === 0
               ||
               strpos($str, '&...$') === 0;
    }
}
