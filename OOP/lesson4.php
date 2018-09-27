<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26.09.18
 * Time: 14:16
 */

Class User {
    public $name;
    public $age;
    public $city;
    public $job;

    function __construct($name, $age, $city, $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
        $this->job = $job;
    }

    function getInfo(){
        return "{$this->name}".'<br />'. "{$this->age}".'<br />'. "{$this->city}".'<br />'. "{$this->job}";
    }
}

$user1 = new User("Maslo", "19", "Lutsk", "Fron-end developer");

echo $user1->getInfo();
