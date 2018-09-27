<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26.09.18
 * Time: 11:57
 */
class User {
    public $name;
    public $age;
    public $city;
    public $job;
}

$user1 = new User();
$user1 -> name = 'Igor';
$user1 -> age = '24';
$user1 -> city = 'Lutsk';
$user1 -> job = 'Drupal Web Developer';

echo $user1->name . '<br/>';
echo $user1->age . '<br/>';
echo $user1->city . '<br/>';
echo $user1->job . '<br/>';