<?php

class StartrekWarrior extends Warrior
{
    public int $mentalPower;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->mentalPower = 8;
    }

    public function getPower(): int
    {
        return $this->mentalPower;
    }
}