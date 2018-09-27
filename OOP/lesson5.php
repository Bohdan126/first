<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26.09.18
 * Time: 14:44
 */
Class User {

    private static $name;

    public static function setName($name1){
        self::$name = $name1;
    }
    public static function getName(){
        return self::$name;
    }
}

User::setName('Sir_Badyanchick');
echo User::getName();