<?php
class Person
{
    // здоровье человека не может быть более 100%
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }

    function sayHi($name)
    {
        return "Hi, $name, I`m" . $this->name;
    }
    function setHP($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHP()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo()
    {
        return "
        <h3>A few words about myself.</h3>
            <br>" . "My name is: " . $this->getName() .
            "<br>my lastname is: " . $this->getLastname() .
            "<br>my father is: " . $this->getFather()->getName() . " " . $this->getFather()->getLastname() .
            "<br>my mather is: " . $this->getMother()->getName() . " " . $this->getMother()->getLastname() .
            "<br>my paternal grandfather is: " . $this->getFather()->getFather()->getName() . " " . $this->getFather()->getFather()->getLastname() .
            "<br>my paternal grandmother is: " . $this->getFather()->getMother()->getName() . " " . $this->getFather()->getMother()->getLastname() .
            "<br>my maternal grandfather is: " . $this->getMother()->getFather()->getName() . " " . $this->getMother()->getFather()->getLastname() .
            "<br>my maternal grandmother is: " . $this->getMother()->getMother()->getName() . " " . $this->getMother()->getMother()->getLastname();
    }
}
$igor = new Person("Igor", "Petrov", 68);
$luba = new Person("Luba", "Petrova", 63);
$dima = new Person("Dmitry", "Dibrov", 65);
$galya = new Person("Galina", "Dibrova", 59);
$alex = new Person("Alex", "Petrov", 42, $luba, $igor);
$olga = new Person("Olga", "Petrova", 42, $galya, $dima);
$valera = new Person("Valera", "Petrov", 15, $olga, $alex);


echo $valera->getInfo();

// echo $valera->getMother()->getFather()->getName();

// $medKit = 50;
// $alex->setHP(-30);  // Упал

// echo $alex->getHP() . "<br>";
// $alex->setHP($medKit); // Нашёл аптечку
// echo $alex->getHP();


// $alex->name = "Alex";
// echo $alex->sayHi($igor->name);

// echo $alex->name;
