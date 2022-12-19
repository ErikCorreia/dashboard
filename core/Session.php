<?php 
namespace Core;

class session
{
    public function __construct()
    {
        session_start();
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        if (isset($key)) {
            return $_SESSION[$key];
        }
    }

    public function delete($key)
    {
        unset($_SESSION[$key]);
    }

    public function has($key)
    {
        return $_SESSION[$key] ? true : false;
    }

    public function destroy()
    {
        session_unset();
        session_destroy();
    }
}
