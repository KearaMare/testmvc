<?php

namespace Template\Controllers;
use Template\Controllers\Controller;
use Template\Models\PokedexManager;

class PokedexController extends Controller {
    // Récupère chaque pokemon en base de données
    public function getAll() {
        $manager = new PokedexManager();
        $pokemons = $manager->getAll();

        require VIEWS . 'pokemon.php';
    }
}