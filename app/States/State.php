<?php

namespace App\States;

use App\Models\Freeza;

abstract class State
{
    protected Freeza $freeza;
    protected int $power;
    protected int $energy;

    public function setFreeza(Freeza $freeza)
    {
        $this->freeza = $freeza;
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    abstract public function attack(): string;
    abstract public function defend(int $damage): string;
}
