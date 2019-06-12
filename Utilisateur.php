<?php

class Utilisateur

{

	private $id;

	private $nom;

	private $mdp;

	public function __constructor($id, $nom , $mdp) {
        $this->id = $id;
        $this->nom = $nom;
        $this->mdp = $mdp;
    }

	public function getNom()
	{
		return 'votre nom est ' . $this->nom;
    }
    
    public function setNom($nom) {
        $nom = $this->nom;
    }

}