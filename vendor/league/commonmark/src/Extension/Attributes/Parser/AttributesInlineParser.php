<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 * (c) 2015 Martin Hasoň <martin.hason@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace League\CommonMark\Extension\Attributes\Parser;

use League\CommonMark\Extension\Attributes\Node\AttributesInline;
use League\CommonMark\Extension\Attributes\Util\AttributesHelper;
<<<<<<< HEAD
use League\CommonMark\Inline\Element\Text;
=======
>>>>>>> parent of 31cfa1b1 (p)
use League\CommonMark\Inline\Parser\InlineParserInterface;
use League\CommonMark\InlineParserContext;

final class AttributesInlineParser implements InlineParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCharacters(): array
    {
<<<<<<< HEAD
        return ['{'];
=======
        return [' ', '{'];
>>>>>>> parent of 31cfa1b1 (p)
    }

    public function parse(InlineParserContext $inlineContext): bool
    {
        $cursor = $inlineContext->getCursor();
<<<<<<< HEAD

        $char = (string) $cursor->peek(-1);
=======
        if ($cursor->getNextNonSpaceCharacter() !== '{') {
            return false;
        }

        $char = $cursor->getCharacter();
        if ($char === '{') {
            $char = (string) $cursor->getCharacter($cursor->getPosition() - 1);
        }
>>>>>>> parent of 31cfa1b1 (p)

        $attributes = AttributesHelper::parseAttributes($cursor);
        if ($attributes === []) {
            return false;
        }

<<<<<<< HEAD
        if ($char === ' ' && ($previousInline = $inlineContext->getContainer()->lastChild()) instanceof Text) {
            $previousInline->setContent(\rtrim($previousInline->getContent(), ' '));
        }

=======
>>>>>>> parent of 31cfa1b1 (p)
        if ($char === '') {
            $cursor->advanceToNextNonSpaceOrNewline();
        }

        $node = new AttributesInline($attributes, $char === ' ' || $char === '');
        $inlineContext->getContainer()->appendChild($node);

        return true;
    }
}
