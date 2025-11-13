<?php

namespace App\Http\Controllers;

use App\Models\Freeza;
use App\States\BaseForm;
use App\States\FirstForm;
use App\States\SecondForm;
use App\States\ThirdForm;
use App\States\FinalForm;
use App\States\GoldenFreezer;

class FreezaController extends Controller
{
    public function index()
    {

        $log = [];
    
        $freeza = new Freeza(new BaseForm());
        $log[] = $freeza->attack();
        $log[] = $freeza->defend(10);

        // Cambio de estado
        $freeza->transitionTo(new FirstForm());
        $log[] = $freeza->attack();
        $log[] = $freeza->defend(20);

        $freeza->transitionTo(new SecondForm());
        $log[] = $freeza->attack();
        $log[] = $freeza->defend(30);

        $freeza->transitionTo(new ThirdForm());
        $log[] = $freeza->attack();
        $log[] = $freeza->defend(40);

        $freeza->transitionTo(new FinalForm());
        $log[] = $freeza->attack();
        $log[] = $freeza->defend(50);

        $freeza->transitionTo(new GoldenFreezer());
        $log[] = $freeza->attack();
        $log[] = $freeza->defend(60);

        return response()->json($log);
    }
}
