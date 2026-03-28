<?php

namespace Template\Controllers;
use Template\Controllers\Controller;
use Template\Models\PokedexManager;

class PokedexController extends Controller {
    public function getAll() {
        $manager = new PokedexManager();
        $pokemons = $manager->getAll();

        require VIEWS . 'pokemon.php';
    }
}