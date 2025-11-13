<?php

namespace App\States;

class GoldenFreezer extends State
{
    protected int $power = 5000000;
    protected int $energy = 30;

    public function attack(): string
    {
        return "🔥 Golden Freezer desata un poder dorado devastador.";
    }

    public function defend(int $damage): string
    {
        $this->energy -= $damage / 20;
        return "Golden Freezer casi no siente el golpe. Energía: {$this->energy}";
    }
}
