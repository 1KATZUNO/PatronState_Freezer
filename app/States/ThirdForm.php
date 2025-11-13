<?php

namespace App\States;

class ThirdForm extends State
{
    protected int $power = 1300000;
    protected int $energy = 18;

    public function attack(): string
    {
        return "Freeza (Tercera Forma) ataca con ferocidad monstruosa.";
    }

    public function defend(int $damage): string
    {
        $this->energy -= $damage / 12;
        return "Tercera Forma aguanta el impacto. Energía: {$this->energy}";
    }
}
