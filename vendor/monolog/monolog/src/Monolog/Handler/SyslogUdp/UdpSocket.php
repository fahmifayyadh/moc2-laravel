<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler\SyslogUdp;

use Monolog\Utils;
<<<<<<< HEAD
use Socket;
=======
>>>>>>> parent of 31cfa1b1 (p)

class UdpSocket
{
    protected const DATAGRAM_MAX_LENGTH = 65023;

    /** @var string */
    protected $ip;
    /** @var int */
    protected $port;
<<<<<<< HEAD
    /** @var resource|Socket|null */
=======
    /** @var resource|null */
>>>>>>> parent of 31cfa1b1 (p)
    protected $socket;

    public function __construct(string $ip, int $port = 514)
    {
        $this->ip = $ip;
        $this->port = $port;
<<<<<<< HEAD
        $domain = AF_INET;
        $protocol = SOL_UDP;
        // Check if we are using unix sockets.
        if ($port === 0) {
            $domain = AF_UNIX;
            $protocol = IPPROTO_IP;
        }
        $this->socket = socket_create($domain, SOCK_DGRAM, $protocol) ?: null;
    }

    /**
     * @param  string $line
     * @param  string $header
     * @return void
     */
=======
        $this->socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
    }

>>>>>>> parent of 31cfa1b1 (p)
    public function write($line, $header = "")
    {
        $this->send($this->assembleMessage($line, $header));
    }

    public function close(): void
    {
<<<<<<< HEAD
        if (is_resource($this->socket) || $this->socket instanceof Socket) {
=======
        if (is_resource($this->socket)) {
>>>>>>> parent of 31cfa1b1 (p)
            socket_close($this->socket);
            $this->socket = null;
        }
    }

    protected function send(string $chunk): void
    {
<<<<<<< HEAD
        if (!is_resource($this->socket) && !$this->socket instanceof Socket) {
=======
        if (!is_resource($this->socket)) {
>>>>>>> parent of 31cfa1b1 (p)
            throw new \RuntimeException('The UdpSocket to '.$this->ip.':'.$this->port.' has been closed and can not be written to anymore');
        }
        socket_sendto($this->socket, $chunk, strlen($chunk), $flags = 0, $this->ip, $this->port);
    }

    protected function assembleMessage(string $line, string $header): string
    {
        $chunkSize = static::DATAGRAM_MAX_LENGTH - strlen($header);

        return $header . Utils::substr($line, 0, $chunkSize);
    }
}
