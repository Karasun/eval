<?php

Class Etudiant {
    public $nom;
    public $prenom;

    public function __cosntruct($nom, $prenom, $id = null) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getId() {
        return $this->id;
     }
     
     public function setId($id) {
        $this->id = $id;
     }
    public function toString() {
        return "Nom : {$this->nom},Prenom : {$this->prenom}";
     } 
}

?>