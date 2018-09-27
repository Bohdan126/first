<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.09.18
 * Time: 10:34
 */

class User {
    public static $name;

    public static function LestGo(){
        echo self::$name. ", йдемо чайок вип'єм)". '<br>'. 'Го?';
    }
}
User::$name = "Maslo";
User::LestGo();