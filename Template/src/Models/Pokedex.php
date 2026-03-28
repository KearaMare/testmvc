<?php

namespace Template\Models;

class Pokedex {
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