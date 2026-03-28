<?php

namespace Template\Models;

// enlever le abstract pour transformer chaque élément en objet
class Pokedex {
    // Initiation de chaque des fonctions pour récupérer un élément seulement
    private $id;
    private $nom;
    private $description;
    private $type;
    private $image_url;

    public function getId() {
        return $this->id; 
    }
    public function getNom() {
        return $this->nom;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getType() {
        return $this->type; 
    }
    public function getImageUrl() {
        return $this->image_url; 
}
}