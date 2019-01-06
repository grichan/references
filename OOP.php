<?php

class Pokemon {
    private $id = 1;
    public $name;
    protected $speed;
    public static $goodness;
    public function __construct($id, $name, $speed)
    {
        $this->id = $id;
        $this->name = $name;
        $this->speed = $speed;
    }
    public static function getGoodness(){
        return self::$goodness;
    }

    public function __destruct()
    {
        echo 'Destructing ...';
    }

    public function getName(){
        return $this->name;
    }
}

$pokemon = new Pokemon(1, "Pikachu", 5);

// echo $pokemon->id;
echo $pokemon->getName(), "\n";

class Demnimon extends Pokemon {
    public $evilness;

    public function __construct($id, $name, $speed, $evilness){
        parent::__construct($id, $name, $speed);
        $this->evilness = $evilness;
    }
}

$demnimon = new Demnimon(2, "Pikachulu", 7, 8);

// Abstract class can only be instantiated (extended) cant be fiddled directly 

?>