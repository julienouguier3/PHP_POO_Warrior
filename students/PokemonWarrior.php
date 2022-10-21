<?php

class PokemonWarrior extends Warrior
{

    public int $level;

    /**
     * @param int $level
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->level = 1;
    }


    public function getPower():int
    {
        return $this->level;
    }
}