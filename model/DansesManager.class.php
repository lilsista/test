<?php

class DansesManager{

	protected $mysql;

	public function __construct($connexion){

		$this->mysql = $connexion;
	}

	public function getDanses(){
		// ecrire la requete sql
		$danseTab = [];
		$requete = "SELECT * FROM danses";
		$resultat = $this->mysql->query($requete); 
		while($ligne = $resultat->fetch_assoc()){
			array_push($danseTab, $ligne);
		}
		
		return $danseTab;
	}

	public function getCategorie($cat){
		//$catTab = [];
		$requete = "SELECT * FROM danses WHERE categorie =".'"'.$cat.'"' ;
		$resultat = $this->mysql->query($requete);
		$categorie = $resultat->fetch_assoc();
		
		return $categorie;
	}

}