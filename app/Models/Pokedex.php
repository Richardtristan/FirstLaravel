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
    function getPokemons($id)
    {
        $poke = $this->db->prepare("SELECT pokemons FROM pokedex WHERE userId = ?");
        $poke->execute([$id]);
        if ($poke == null){
            return false;
        }
        $poke->execute([$this->id]);
        return $poke->fetch();
    }
    function setPokemons($id)
    {
        $poke = $this->db->prepare("INSERT INTO `pokedex`(`userId`, `pokemons`, `date`) WHERE userId = ?");
        $poke->execute([$id, '0', '2021-09-19 17:29:49', $id]);
    }
    function newPokemons($id){
        $date = $this->db->prepare("SELECT date FROM pokedex WHERE userId = ?");
        $date->execute([ $this->id]);
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
