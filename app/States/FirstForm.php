<?php

namespace App\States;

class FirstForm extends State
{
    protected int $power = 530000;
    protected int $energy = 10;

    public function attack(): string
    {
        return "Freeza (Primera Forma) dispara rayos de energía.";
    }

    public function defend(int $damage): string
    {
        $this->energy -= $damage / 8;
        return "Primera Forma resiste el ataque. Energía: {$this->energy}";
    }
}
