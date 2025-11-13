<?php

namespace App\States;

class SecondForm extends State
{
    protected int $power = 1000000;
    protected int $energy = 15;

    public function attack(): string
    {
        return "Freeza (Segunda Forma) golpea brutalmente.";
    }

    public function defend(int $damage): string
    {
        $this->energy -= $damage / 10;
        return "Segunda Forma recibe daño. Energía: {$this->energy}";
    }
}
