<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LuckyController extends Controller
{
    /**
     * @throws \Exception
     */
    public function Post()
    {

        $id = Auth::id();
        $issetVar = isset($_POST['pokemon_x']) && isset($_POST['pokemon_y']);
        if (Auth::id() !== null) {
            $dateNow = new DateTime();
            $dateNow->modify("+2 hour");

            $pokedex = new Pokedex();
            if (!$pokedex->getPokemons($id)) {
                $pokedex->setDate($dateNow, $id);
            } else {
                $pokemons = $pokedex->getPokemons($id)[0]->pokemons;
            }
            $date = new DateTime($pokedex->getDate($id)[0]->date);
            $date->modify("+2 hour");

            $hour = $date->format("Y-m-d H:i:s");
            $error = "comme back to : " . $date->format('Y-m-d H:i:s');
            if ($issetVar && $date < $dateNow) {
                $randId = rand(1, 151);
                $pokedex->setPokemons($pokedex->getPokemons($id)[0]->pokemons, $randId, $dateNow->format('Y-m-d H:i:s'),$id);
            } if ($issetVar && $date > $dateNow) {
                return $error;
            }
        }
        return view('site/lucky')->with('error', $error);
    }
}
