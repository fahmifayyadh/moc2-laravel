<?php

declare(strict_types=1);

namespace phpDocumentor\Reflection;

use phpDocumentor\Reflection\DocBlock\Tag;

// phpcs:ignore SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
interface DocBlockFactoryInterface
{
    /**
     * Factory method for easy instantiation.
     *
     * @param array<string, class-string<Tag>> $additionalTags
     */
<<<<<<< HEAD
    public static function createInstance(array $additionalTags = []): DocBlockFactory;
=======
    public static function createInstance(array $additionalTags = []) : DocBlockFactory;
>>>>>>> parent of 31cfa1b1 (p)

    /**
     * @param string|object $docblock
     */
<<<<<<< HEAD
    public function create($docblock, ?Types\Context $context = null, ?Location $location = null): DocBlock;
=======
    public function create($docblock, ?Types\Context $context = null, ?Location $location = null) : DocBlock;
>>>>>>> parent of 31cfa1b1 (p)
}
