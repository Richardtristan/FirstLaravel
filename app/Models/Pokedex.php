<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pokedex extends Model
{
    use HasFactory;
    public $pokemons;
    public $id;

    /**
     * @param $pokemons
     * @param $id
     */

    function getPokemons($id)
    {
        $poke = DB::select("SELECT pokemons FROM pokedexes WHERE userId = $id");
        if ($poke == null){
            DB::table('pokedexes')->where('id', '=', $id)
                ->updateOrInsert(
                    ['userId' => $id],
                    ['pokemons' => '0'],
                    ['date' => '2021-09-19 17:29:49']
                );
        }

        return $poke;
    }
    function setPokemons($actual, $randId, $date, $id)
    {
        DB::update('update pokedexes set pokemons = ?, date = ? where userId = ?', [$actual . ',' . $randId,$date,$id]);
    }

    function getDate($id)
    {
        $date = DB::select("SELECT date FROM pokedexes WHERE userId = $id");
        return $date;
    }
    function setDate($dateNow, $id)
    {
        $date = DB::update('update pokedexes set date = ? where userId = ?', [$dateNow,$id]);
    }
    function ladderPokedex()
    {
        $ladder = DB::select("SELECT username,pokemons FROM users INNER JOIN pokedexes on pokedexes.userId = users.id");
        return $ladder;
    }
}
