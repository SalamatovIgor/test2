<?php

namespace App\Characters;

class Warrior extends Specifications
{
    protected string $armor;
    protected int $regenerationHealths;

    public function __construct(int $physique, int $agility, int $spirit, string $armor, int $regenerationHealths)
    {
        parent::__construct($physique, $agility, $spirit);
        $this->armor = $armor;
        $this->regenerationHealths = $regenerationHealths;
    }


    public function getArmor(): string
    {
        return $this->armor;
    }
    public function getRegenerationXP():int
    {
        return $this->regenerationHealths;
    }

}