<?php
<<<<<<< HEAD

=======
>>>>>>> parent of 31cfa1b1 (p)
namespace GuzzleHttp\Cookie;

/**
 * Persists cookies in the client session
 */
class SessionCookieJar extends CookieJar
{
<<<<<<< HEAD
    /**
     * @var string session key
     */
    private $sessionKey;

    /**
     * @var bool Control whether to persist session cookies or not.
     */
=======
    /** @var string session key */
    private $sessionKey;
    
    /** @var bool Control whether to persist session cookies or not. */
>>>>>>> parent of 31cfa1b1 (p)
    private $storeSessionCookies;

    /**
     * Create a new SessionCookieJar object
     *
<<<<<<< HEAD
     * @param string $sessionKey          Session key name to store the cookie
     *                                    data in session
     * @param bool   $storeSessionCookies Set to true to store session cookies
     *                                    in the cookie jar.
     */
    public function __construct(string $sessionKey, bool $storeSessionCookies = false)
=======
     * @param string $sessionKey        Session key name to store the cookie
     *                                  data in session
     * @param bool $storeSessionCookies Set to true to store session cookies
     *                                  in the cookie jar.
     */
    public function __construct($sessionKey, $storeSessionCookies = false)
>>>>>>> parent of 31cfa1b1 (p)
    {
        parent::__construct();
        $this->sessionKey = $sessionKey;
        $this->storeSessionCookies = $storeSessionCookies;
        $this->load();
    }

    /**
     * Saves cookies to session when shutting down
     */
    public function __destruct()
    {
        $this->save();
    }

    /**
     * Save cookies to the client session
     */
<<<<<<< HEAD
    public function save(): void
    {
        $json = [];
        /** @var SetCookie $cookie */
        foreach ($this as $cookie) {
=======
    public function save()
    {
        $json = [];
        foreach ($this as $cookie) {
            /** @var SetCookie $cookie */
>>>>>>> parent of 31cfa1b1 (p)
            if (CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) {
                $json[] = $cookie->toArray();
            }
        }

<<<<<<< HEAD
        $_SESSION[$this->sessionKey] = \json_encode($json);
=======
        $_SESSION[$this->sessionKey] = json_encode($json);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Load the contents of the client session into the data array
     */
<<<<<<< HEAD
    protected function load(): void
=======
    protected function load()
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (!isset($_SESSION[$this->sessionKey])) {
            return;
        }
<<<<<<< HEAD
        $data = \json_decode($_SESSION[$this->sessionKey], true);
        if (\is_array($data)) {
            foreach ($data as $cookie) {
                $this->setCookie(new SetCookie($cookie));
            }
        } elseif (\strlen($data)) {
=======
        $data = json_decode($_SESSION[$this->sessionKey], true);
        if (is_array($data)) {
            foreach ($data as $cookie) {
                $this->setCookie(new SetCookie($cookie));
            }
        } elseif (strlen($data)) {
>>>>>>> parent of 31cfa1b1 (p)
            throw new \RuntimeException("Invalid cookie data");
        }
    }
}
