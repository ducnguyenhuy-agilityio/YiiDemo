<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 2/26/13
 * Time: 2:34 PM
 * To change this template use File | Settings | File Templates.
 */
class Cookie
{
    public static function get($name) {
        $cookie = Yii::app()->request->cookies[$name];
        if (!$cookie) return NULL;

        return $cookie->value;

    }

    public static function set($name, $value, $expiration = 0) {
        $cookie = new CHttpCookie($name, $value);
        $cookie->expire = $expiration;
        Yii::app()->request->cookies[$name] = $cookie;
    }

}
