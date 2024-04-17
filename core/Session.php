<?php

namespace Atresna\Atresnaframework\core;


class Session
{
    // Properties 
    protected const FLASH_KEY = 'flash_message';
    /**
     * Class constructor.
     */
    public function __construct()
    {
        // Mulai Session 
        session_start();
        // Flash Message 
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        // iterate flash message 
        foreach ($flashMessages as $key => &$flashMessage) {
            // mark to be removed
            $flashMessage['remove'] = true; // kita request baru akan dieksekusi
        }

        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }

    function setFlash($key, $message)
    {
        $_SESSION[self::FLASH_KEY][$key] = [
            'remove' => false,
            'value' => $message
        ];
    }

    function getFlash($key)
    {
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key] ?? false;
    }

    function remove($key)
    {
        unset($_SESSION[$key]);
    }

    /**
     * Class destructor.
     */
    public function __destruct()
    {
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        // iterate flash message 
        foreach ($flashMessages as $key => &$flashMessage) {
            if ($flashMessage['remove']) {
                unset($flashMessages[$key]);
            }
        }
        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }
}