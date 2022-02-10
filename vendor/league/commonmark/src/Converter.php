<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark;

/**
 * Converts CommonMark-compatible Markdown to HTML.
 *
<<<<<<< HEAD
 * @deprecated This class is deprecated since league/commonmark 1.4, use MarkdownConverter instead.
=======
 * @deprecated This class is deprecated since league/commonmark 1.4, use CommonMarkConverter instead.
>>>>>>> parent of 31cfa1b1 (p)
 */
class Converter implements ConverterInterface
{
    /**
     * The document parser instance.
     *
     * @var DocParserInterface
     */
    protected $docParser;

    /**
     * The html renderer instance.
     *
     * @var ElementRendererInterface
     */
    protected $htmlRenderer;

    /**
     * Create a new commonmark converter instance.
     *
     * @param DocParserInterface       $docParser
     * @param ElementRendererInterface $htmlRenderer
     */
    public function __construct(DocParserInterface $docParser, ElementRendererInterface $htmlRenderer)
    {
<<<<<<< HEAD
        if (!($this instanceof MarkdownConverter)) {
            @trigger_error(sprintf('The %s class is deprecated since league/commonmark 1.4, use %s instead.', self::class, MarkdownConverter::class), E_USER_DEPRECATED);
=======
        if (!($this instanceof CommonMarkConverter)) {
            @trigger_error(sprintf('The %s class is deprecated since league/commonmark 1.4, use %s instead.', self::class, CommonMarkConverter::class), E_USER_DEPRECATED);
>>>>>>> parent of 31cfa1b1 (p)
        }

        $this->docParser = $docParser;
        $this->htmlRenderer = $htmlRenderer;
    }

    /**
     * Converts CommonMark to HTML.
     *
     * @param string $commonMark
     *
     * @throws \RuntimeException
     *
     * @return string
     *
     * @api
     */
    public function convertToHtml(string $commonMark): string
    {
        $documentAST = $this->docParser->parse($commonMark);

        return $this->htmlRenderer->renderBlock($documentAST);
    }

    /**
     * Converts CommonMark to HTML.
     *
     * @see Converter::convertToHtml
     *
     * @param string $commonMark
     *
     * @throws \RuntimeException
     *
     * @return string
     */
    public function __invoke(string $commonMark): string
    {
        return $this->convertToHtml($commonMark);
    }
}
