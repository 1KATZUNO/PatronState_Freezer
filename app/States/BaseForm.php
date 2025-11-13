<?php

namespace App\States;

class BaseForm extends State
{
    protected int $power = 120000;
    protected int $energy = 5;

    public function attack(): string
    {
        return "Freeza (Forma Base) lanza un ataque básico.";
    }

    public function defend(int $damage): string
    {
        $this->energy -= $damage / 5;
        return "Base Freeza recibe $damage de daño. Energía: {$this->energy}";
    }
}
