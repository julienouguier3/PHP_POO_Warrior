<?php

require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['warriorName'] = 'Black Widow';

abstract class Warrior extends LocalWarrior
{

    public string $name;
    public int $speed;
    public int $life;
    public int $shield;
    public string $imageUrl;
    public ?Weapon $weapon ;
//    public Weapon|null $weapon2; //option2

    /**
     * @param string $WarriorName
     */
    public function __construct(string $WarriorName)
    {
        $this->name = $WarriorName;
        $this->speed = 30;
        $this->life = 100;
        $this->shield = 20;
    }

}
