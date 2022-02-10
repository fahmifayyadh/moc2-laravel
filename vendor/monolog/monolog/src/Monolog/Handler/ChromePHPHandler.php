<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Formatter\ChromePHPFormatter;
use Monolog\Formatter\FormatterInterface;
use Monolog\Logger;
use Monolog\Utils;

/**
 * Handler sending logs to the ChromePHP extension (http://www.chromephp.com/)
 *
 * This also works out of the box with Firefox 43+
 *
 * @author Christophe Coevoet <stof@notk.org>
<<<<<<< HEAD
 *
 * @phpstan-import-type Record from \Monolog\Logger
=======
>>>>>>> parent of 31cfa1b1 (p)
 */
class ChromePHPHandler extends AbstractProcessingHandler
{
    use WebRequestRecognizerTrait;

    /**
     * Version of the extension
     */
    protected const VERSION = '4.0';

    /**
     * Header name
     */
    protected const HEADER_NAME = 'X-ChromeLogger-Data';

    /**
     * Regular expression to detect supported browsers (matches any Chrome, or Firefox 43+)
     */
    protected const USER_AGENT_REGEX = '{\b(?:Chrome/\d+(?:\.\d+)*|HeadlessChrome|Firefox/(?:4[3-9]|[5-9]\d|\d{3,})(?:\.\d)*)\b}';

<<<<<<< HEAD
    /** @var bool */
=======
>>>>>>> parent of 31cfa1b1 (p)
    protected static $initialized = false;

    /**
     * Tracks whether we sent too much data
     *
     * Chrome limits the headers to 4KB, so when we sent 3KB we stop sending
     *
     * @var bool
     */
    protected static $overflowed = false;

<<<<<<< HEAD
    /** @var mixed[] */
=======
>>>>>>> parent of 31cfa1b1 (p)
    protected static $json = [
        'version' => self::VERSION,
        'columns' => ['label', 'log', 'backtrace', 'type'],
        'rows' => [],
    ];

<<<<<<< HEAD
    /** @var bool */
    protected static $sendHeaders = true;

=======
    protected static $sendHeaders = true;

    /**
     * @param string|int $level  The minimum logging level at which this handler will be triggered
     * @param bool       $bubble Whether the messages that are handled can bubble up the stack or not
     */
>>>>>>> parent of 31cfa1b1 (p)
    public function __construct($level = Logger::DEBUG, bool $bubble = true)
    {
        parent::__construct($level, $bubble);
        if (!function_exists('json_encode')) {
            throw new \RuntimeException('PHP\'s json extension is required to use Monolog\'s ChromePHPHandler');
        }
    }

    /**
<<<<<<< HEAD
     * {@inheritDoc}
=======
     * {@inheritdoc}
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function handleBatch(array $records): void
    {
        if (!$this->isWebRequest()) {
            return;
        }

        $messages = [];

        foreach ($records as $record) {
            if ($record['level'] < $this->level) {
                continue;
            }
<<<<<<< HEAD
            /** @var Record $message */
            $message = $this->processRecord($record);
            $messages[] = $message;
=======
            $messages[] = $this->processRecord($record);
>>>>>>> parent of 31cfa1b1 (p)
        }

        if (!empty($messages)) {
            $messages = $this->getFormatter()->formatBatch($messages);
            self::$json['rows'] = array_merge(self::$json['rows'], $messages);
            $this->send();
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter(): FormatterInterface
    {
        return new ChromePHPFormatter();
    }

    /**
     * Creates & sends header for a record
     *
     * @see sendHeader()
     * @see send()
     */
    protected function write(array $record): void
    {
        if (!$this->isWebRequest()) {
            return;
        }

        self::$json['rows'][] = $record['formatted'];

        $this->send();
    }

    /**
     * Sends the log header
     *
     * @see sendHeader()
     */
    protected function send(): void
    {
        if (self::$overflowed || !self::$sendHeaders) {
            return;
        }

        if (!self::$initialized) {
            self::$initialized = true;

            self::$sendHeaders = $this->headersAccepted();
            if (!self::$sendHeaders) {
                return;
            }

            self::$json['request_uri'] = $_SERVER['REQUEST_URI'] ?? '';
        }

<<<<<<< HEAD
        $json = Utils::jsonEncode(self::$json, Utils::DEFAULT_JSON_FLAGS & ~JSON_UNESCAPED_UNICODE, true);
=======
        $json = Utils::jsonEncode(self::$json, null, true);
>>>>>>> parent of 31cfa1b1 (p)
        $data = base64_encode(utf8_encode($json));
        if (strlen($data) > 3 * 1024) {
            self::$overflowed = true;

            $record = [
                'message' => 'Incomplete logs, chrome header size limit reached',
                'context' => [],
                'level' => Logger::WARNING,
                'level_name' => Logger::getLevelName(Logger::WARNING),
                'channel' => 'monolog',
                'datetime' => new \DateTimeImmutable(),
                'extra' => [],
            ];
            self::$json['rows'][count(self::$json['rows']) - 1] = $this->getFormatter()->format($record);
            $json = Utils::jsonEncode(self::$json, null, true);
            $data = base64_encode(utf8_encode($json));
        }

        if (trim($data) !== '') {
            $this->sendHeader(static::HEADER_NAME, $data);
        }
    }

    /**
     * Send header string to the client
     */
    protected function sendHeader(string $header, string $content): void
    {
        if (!headers_sent() && self::$sendHeaders) {
            header(sprintf('%s: %s', $header, $content));
        }
    }

    /**
     * Verifies if the headers are accepted by the current user agent
     */
    protected function headersAccepted(): bool
    {
        if (empty($_SERVER['HTTP_USER_AGENT'])) {
            return false;
        }

        return preg_match(static::USER_AGENT_REGEX, $_SERVER['HTTP_USER_AGENT']) === 1;
    }
}
