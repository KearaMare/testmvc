<?php

namespace Template\Models;

use Template\Models\Manager;

class PokedexManager extends Pokedex {
    protected $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getAll() {
        $stmt = $this->bdd->prepare('SELECT * FROM pokemon');
        $stmt->execute();
        // important transforme en objet
        return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Template\Models\Pokedex');
    }
}