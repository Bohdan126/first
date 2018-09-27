<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.09.18
 * Time: 8:54
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
        return "{$this->name}".'<br />'. "{$this->age}".'<br />'. "{$this->city}".'<br />'. "{$this->job}".'<br />';
    }
}

$user1 = new User("Maslo", "19", "Lutsk", "Fron-end developer");

//echo $user1->getInfo();



//Робимо дочірній клас

class Moderator extends User {
    public $info;
    public $rights;

  function __construct($name, $age, $city, $job, $info, $rights)
  {
      parent::__construct($name, $age, $city, $job);
      $this->info = $info;
      $this->rights = $rights;
  }
  function getInfo() {
      $information = parent::getInfo();
      $information .= "{$this->info}".'<br />'."{$this->rights}".'<br />';

      return $information;
  }

}

$moder = new Moderator("Maslo","19", "Lutsk", "verstka", "intern", "true");
echo $moder->getInfo();



///Приклад використання protected
class Test {
    protected $info;
}

class Test2 extends Test{
    public function test(){
        $this->info = "info";
        echo $this->info;
    }
}

$test = new Test2();
$test->test();