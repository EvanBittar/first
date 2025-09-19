<?php

namespace Core;

class Session
{
    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null){
        if (isset($_SESSION['_flash'][$key])) {
        return $_SESSION['_flash'][$key];
        }
        return $_SESSION[$key] ?? $default;
    }

    public static function remove($key){
        unset($_SESSION[$key]);
    }
    public static function haS($key, $value){
        return (bool) static::get($key, $value);
    }
    public static function flash($key, $value){
        $_SESSION['_flash'][$key] = $value;
    }
    public static function removeFlash()
    {
        unset($_SESSION['_flash']);
    }
    public static function unflash()
    {
        $_SESSION = [];
    }
    public static function logout(){
    static::unflash();
    session_destroy();
    $param = session_get_cookie_params();

    setcookie('PHPSESSID', '', time() - 3600, $param['path'], $param['domain'], $param['secure'], $param['httponly']);

}
}