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

namespace phpDocumentor\Reflection;

use phpDocumentor\Reflection\DocBlock\Tag;
<<<<<<< HEAD
use phpDocumentor\Reflection\DocBlock\Tags\TagWithType;
=======
>>>>>>> parent of 31cfa1b1 (p)
use Webmozart\Assert\Assert;

final class DocBlock
{
    /** @var string The opening line for this docblock. */
    private $summary;

    /** @var DocBlock\Description The actual description for this docblock. */
    private $description;

    /** @var Tag[] An array containing all the tags in this docblock; except inline. */
    private $tags = [];

    /** @var Types\Context|null Information about the context of this DocBlock. */
    private $context;

    /** @var Location|null Information about the location of this DocBlock. */
    private $location;

    /** @var bool Is this DocBlock (the start of) a template? */
    private $isTemplateStart;

    /** @var bool Does this DocBlock signify the end of a DocBlock template? */
    private $isTemplateEnd;

    /**
     * @param DocBlock\Tag[] $tags
     * @param Types\Context  $context  The context in which the DocBlock occurs.
     * @param Location       $location The location within the file that this DocBlock occurs in.
     */
    public function __construct(
        string $summary = '',
        ?DocBlock\Description $description = null,
        array $tags = [],
        ?Types\Context $context = null,
        ?Location $location = null,
        bool $isTemplateStart = false,
        bool $isTemplateEnd = false
    ) {
        Assert::allIsInstanceOf($tags, Tag::class);

        $this->summary     = $summary;
        $this->description = $description ?: new DocBlock\Description('');
        foreach ($tags as $tag) {
            $this->addTag($tag);
        }

        $this->context  = $context;
        $this->location = $location;

        $this->isTemplateEnd   = $isTemplateEnd;
        $this->isTemplateStart = $isTemplateStart;
    }

<<<<<<< HEAD
    public function getSummary(): string
=======
    public function getSummary() : string
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->summary;
    }

<<<<<<< HEAD
    public function getDescription(): DocBlock\Description
=======
    public function getDescription() : DocBlock\Description
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->description;
    }

    /**
     * Returns the current context.
     */
<<<<<<< HEAD
    public function getContext(): ?Types\Context
=======
    public function getContext() : ?Types\Context
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->context;
    }

    /**
     * Returns the current location.
     */
<<<<<<< HEAD
    public function getLocation(): ?Location
=======
    public function getLocation() : ?Location
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->location;
    }

    /**
     * Returns whether this DocBlock is the start of a Template section.
     *
     * A Docblock may serve as template for a series of subsequent DocBlocks. This is indicated by a special marker
     * (`#@+`) that is appended directly after the opening `/**` of a DocBlock.
     *
     * An example of such an opening is:
     *
     * ```
     * /**#@+
     *  * My DocBlock
     *  * /
     * ```
     *
     * The description and tags (not the summary!) are copied onto all subsequent DocBlocks and also applied to all
     * elements that follow until another DocBlock is found that contains the closing marker (`#@-`).
     *
     * @see self::isTemplateEnd() for the check whether a closing marker was provided.
     */
<<<<<<< HEAD
    public function isTemplateStart(): bool
=======
    public function isTemplateStart() : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->isTemplateStart;
    }

    /**
     * Returns whether this DocBlock is the end of a Template section.
     *
     * @see self::isTemplateStart() for a more complete description of the Docblock Template functionality.
     */
<<<<<<< HEAD
    public function isTemplateEnd(): bool
=======
    public function isTemplateEnd() : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->isTemplateEnd;
    }

    /**
     * Returns the tags for this DocBlock.
     *
     * @return Tag[]
     */
<<<<<<< HEAD
    public function getTags(): array
=======
    public function getTags() : array
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $this->tags;
    }

    /**
     * Returns an array of tags matching the given name. If no tags are found
     * an empty array is returned.
     *
     * @param string $name String to search by.
     *
     * @return Tag[]
     */
<<<<<<< HEAD
    public function getTagsByName(string $name): array
=======
    public function getTagsByName(string $name) : array
>>>>>>> parent of 31cfa1b1 (p)
    {
        $result = [];

        foreach ($this->getTags() as $tag) {
            if ($tag->getName() !== $name) {
                continue;
            }

            $result[] = $tag;
        }

        return $result;
    }

    /**
<<<<<<< HEAD
     * Returns an array of tags with type matching the given name. If no tags are found
     * an empty array is returned.
     *
     * @param string $name String to search by.
     *
     * @return TagWithType[]
     */
    public function getTagsWithTypeByName(string $name): array
    {
        $result = [];

        foreach ($this->getTagsByName($name) as $tag) {
            if (!$tag instanceof TagWithType) {
                continue;
            }

            $result[] = $tag;
        }

        return $result;
    }

    /**
=======
>>>>>>> parent of 31cfa1b1 (p)
     * Checks if a tag of a certain type is present in this DocBlock.
     *
     * @param string $name Tag name to check for.
     */
<<<<<<< HEAD
    public function hasTag(string $name): bool
=======
    public function hasTag(string $name) : bool
>>>>>>> parent of 31cfa1b1 (p)
    {
        foreach ($this->getTags() as $tag) {
            if ($tag->getName() === $name) {
                return true;
            }
        }

        return false;
    }

    /**
     * Remove a tag from this DocBlock.
     *
     * @param Tag $tagToRemove The tag to remove.
     */
<<<<<<< HEAD
    public function removeTag(Tag $tagToRemove): void
=======
    public function removeTag(Tag $tagToRemove) : void
>>>>>>> parent of 31cfa1b1 (p)
    {
        foreach ($this->tags as $key => $tag) {
            if ($tag === $tagToRemove) {
                unset($this->tags[$key]);
                break;
            }
        }
    }

    /**
     * Adds a tag to this DocBlock.
     *
     * @param Tag $tag The tag to add.
     */
<<<<<<< HEAD
    private function addTag(Tag $tag): void
=======
    private function addTag(Tag $tag) : void
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->tags[] = $tag;
    }
}
