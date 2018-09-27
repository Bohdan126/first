<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.09.18
 * Time: 14:32
 */
interface FirstInterface {
    public function getName();
}

interface SecondInterface{
    public function getStatus();
}

class User implements FirstInterface, SecondInterface{
    public $name = 'Maslo'.'<br>';
    public $status = 'Verstalchuk';

    public function getName()
    {
        echo $this->name;
    }

    public function getStatus()
    {
        echo $this->status;
    }
}
$user1 = new User();
$user1->getName();
$user1->getStatus();