<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LuckyController extends Controller
{
    public function Post()
    {
        $issetVar = isset($_POST['pokemon_x']) && isset($_POST['pokemon_y']);
        if (Auth::id() !== null) {
            $pokedex = new Pokedex(Auth::id());
            if ($pokedex !== null) {
                if (!$pokedex->getPokemons(Auth::id())){
                    $pokedex->setDate(Auth::id());
                }else{$pokemons = $pokedex->getPokemons(Auth::id());
                }
                $date = new DateTime($pokedex->getDate()[0]);
                $date->modify("+2 hour");
                $hour = $date->format("Y-m-d H:i:s");
                $dateNow = new DateTime();
                if ($issetVar && $date < $dateNow) {
                    $randId = rand(1, 151);
                    $pokedex->setPokemons($pokemons[0], ",$randId");
                    $pokedex->setDate($dateNow->format("Y-m-d H:i:s"));
                } else {
                    $messageError = "comme back to $date";
                }
            }
        }
        return view('site/lucky');
    }
}
