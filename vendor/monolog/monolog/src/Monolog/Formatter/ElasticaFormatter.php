<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Formatter;

use Elastica\Document;

/**
 * Format a log message into an Elastica Document
 *
 * @author Jelle Vink <jelle.vink@gmail.com>
<<<<<<< HEAD
 *
 * @phpstan-import-type Record from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
class ElasticaFormatter extends NormalizerFormatter
{
    /**
     * @var string Elastic search index name
     */
    protected $index;

    /**
<<<<<<< HEAD
     * @var ?string Elastic search document type
=======
     * @var string Elastic search document type
>>>>>>> parent of 31cfa1b1 (p)
     */
    protected $type;

    /**
<<<<<<< HEAD
     * @param string  $index Elastic Search index name
     * @param ?string $type  Elastic Search document type, deprecated as of Elastica 7
     */
    public function __construct(string $index, ?string $type)
=======
     * @param string $index Elastic Search index name
     * @param string $type  Elastic Search document type
     */
    public function __construct(string $index, string $type)
>>>>>>> parent of 31cfa1b1 (p)
    {
        // elasticsearch requires a ISO 8601 format date with optional millisecond precision.
        parent::__construct('Y-m-d\TH:i:s.uP');

        $this->index = $index;
        $this->type = $type;
    }

    /**
<<<<<<< HEAD
     * {@inheritDoc}
=======
     * {@inheritdoc}
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function format(array $record)
    {
        $record = parent::format($record);

        return $this->getDocument($record);
    }

    public function getIndex(): string
    {
        return $this->index;
    }

<<<<<<< HEAD
    /**
     * @deprecated since Elastica 7 type has no effect
     */
    public function getType(): string
    {
        /** @phpstan-ignore-next-line */
=======
    public function getType(): string
    {
>>>>>>> parent of 31cfa1b1 (p)
        return $this->type;
    }

    /**
     * Convert a log message into an Elastica Document
<<<<<<< HEAD
     *
     * @phpstan-param Record $record
=======
     * @param  array    $record
     * @return Document
>>>>>>> parent of 31cfa1b1 (p)
     */
    protected function getDocument(array $record): Document
    {
        $document = new Document();
        $document->setData($record);
<<<<<<< HEAD
        if (method_exists($document, 'setType')) {
            /** @phpstan-ignore-next-line */
            $document->setType($this->type);
        }
=======
        $document->setType($this->type);
>>>>>>> parent of 31cfa1b1 (p)
        $document->setIndex($this->index);

        return $document;
    }
}
