<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26.09.18
 * Time: 12:04
 */

class User {
    public $name;
    public $age;
    public $city;
    public $job;

    function getInfo (){
        return "{$this->name}".'<br />'. "{$this->age}".'<br />'. "{$this->city}".'<br />'. "{$this->job}";
    }
}

$admin = new User();
$admin->name = 'Oleh';
$admin->age = '25';
$admin->city = 'Lutsk';
$admin->job = 'Have no any job';

echo "Інформація: {$admin->getInfo()}";





