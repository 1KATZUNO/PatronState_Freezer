<?php

namespace App\Models;

use App\States\State;

class Freeza
{
    private State $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(State $state)
    {
        $this->state = $state;
        $this->state->setFreeza($this);
    }

    public function attack(): string
    {
        return $this->state->attack();
    }

    public function defend(int $damage): string
    {
        return $this->state->defend($damage);
    }
}
