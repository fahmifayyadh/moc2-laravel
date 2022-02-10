<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy;

/**
 * @author Drak <drak@zikula.org>
 */
class SessionHandlerProxy extends AbstractProxy implements \SessionHandlerInterface, \SessionUpdateTimestampHandlerInterface
{
    protected $handler;

    public function __construct(\SessionHandlerInterface $handler)
    {
        $this->handler = $handler;
<<<<<<< HEAD
        $this->wrapper = $handler instanceof \SessionHandler;
=======
        $this->wrapper = ($handler instanceof \SessionHandler);
>>>>>>> parent of 31cfa1b1 (p)
        $this->saveHandlerName = $this->wrapper ? ini_get('session.save_handler') : 'user';
    }

    /**
     * @return \SessionHandlerInterface
     */
    public function getHandler()
    {
        return $this->handler;
    }

    // \SessionHandlerInterface

    /**
     * @return bool
     */
<<<<<<< HEAD
    #[\ReturnTypeWillChange]
    public function open($savePath, $sessionName)
    {
        return $this->handler->open($savePath, $sessionName);
=======
    public function open($savePath, $sessionName)
    {
        return (bool) $this->handler->open($savePath, $sessionName);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * @return bool
     */
<<<<<<< HEAD
    #[\ReturnTypeWillChange]
    public function close()
    {
        return $this->handler->close();
    }

    /**
     * @return string|false
     */
    #[\ReturnTypeWillChange]
    public function read($sessionId)
    {
        return $this->handler->read($sessionId);
=======
    public function close()
    {
        return (bool) $this->handler->close();
    }

    /**
     * @return string
     */
    public function read($sessionId)
    {
        return (string) $this->handler->read($sessionId);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * @return bool
     */
<<<<<<< HEAD
    #[\ReturnTypeWillChange]
    public function write($sessionId, $data)
    {
        return $this->handler->write($sessionId, $data);
=======
    public function write($sessionId, $data)
    {
        return (bool) $this->handler->write($sessionId, $data);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * @return bool
     */
<<<<<<< HEAD
    #[\ReturnTypeWillChange]
    public function destroy($sessionId)
    {
        return $this->handler->destroy($sessionId);
    }

    /**
     * @return int|false
     */
    #[\ReturnTypeWillChange]
    public function gc($maxlifetime)
    {
        return $this->handler->gc($maxlifetime);
=======
    public function destroy($sessionId)
    {
        return (bool) $this->handler->destroy($sessionId);
    }

    /**
     * @return bool
     */
    public function gc($maxlifetime)
    {
        return (bool) $this->handler->gc($maxlifetime);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * @return bool
     */
<<<<<<< HEAD
    #[\ReturnTypeWillChange]
=======
>>>>>>> parent of 31cfa1b1 (p)
    public function validateId($sessionId)
    {
        return !$this->handler instanceof \SessionUpdateTimestampHandlerInterface || $this->handler->validateId($sessionId);
    }

    /**
     * @return bool
     */
<<<<<<< HEAD
    #[\ReturnTypeWillChange]
=======
>>>>>>> parent of 31cfa1b1 (p)
    public function updateTimestamp($sessionId, $data)
    {
        return $this->handler instanceof \SessionUpdateTimestampHandlerInterface ? $this->handler->updateTimestamp($sessionId, $data) : $this->write($sessionId, $data);
    }
}
