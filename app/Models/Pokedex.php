<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;
    public $pokemons;
    public $id;

    /**
     * @param $pokemons
     * @param $id
     */
    public function __construct($id)
    {
        global $db;
        $this->db = $db;
        $this->pokemons;
        $this->id = $id;
    }
    function getPokemons()
    {
        $poke = $this->db->prepare("SELECT pokemons FROM pokedex WHERE userId = ?");
        $poke->execute([$this->id]);
        return $poke->fetch();
    }
    function setPokemons($actualPokedex, $pokemons)
    {
        $poke = $this->db->prepare("UPDATE pokedex set pokemons=? WHERE userId = ?");
        $poke->execute([$actualPokedex.$pokemons, $this->id]);
    }
    function getDate()
    {
        $date = $this->db->prepare("SELECT date FROM pokedex WHERE userId = ?");
        $date->execute([ $this->id]);
        return $date->fetch();
    }
    function setDate($dateNow)
    {
        $date = $this->db->prepare("UPDATE pokedex set date=? WHERE userId = ?");
        $date->execute([$dateNow, $this->id]);
    }
    function ladderPokedex()
    {
        $ladder = $this->db->prepare("SELECT username,pokemons FROM users INNER JOIN pokedex on pokedex.userId = users.id");
        $ladder->execute();
        return $ladder->fetchall();
    }
}
