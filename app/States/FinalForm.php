<?php

namespace App\States;

class FinalForm extends State
{
    protected int $power = 2000000;
    protected int $energy = 20;

    public function attack(): string
    {
        return "Freeza (Forma Final) ataca con precisión extrema.";
    }

    public function defend(int $damage): string
    {
        $this->energy -= $damage / 15;
        return "Forma Final apenas recibe daño. Energía: {$this->energy}";
    }
}
