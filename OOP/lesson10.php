<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.09.18
 * Time: 12:00
 */
abstract class User{
    public $name;
    public $status;

    abstract public function getStatus();
}

class User2 extends User{
    public function getStatus(){
        return 'Admin';
    }

    public function getName($name){
        $this->name = $name;
        return $name;
    }
}

$moder = new User2();

echo $moder->getName('Maslo '). 'is '. $moder->getStatus();



