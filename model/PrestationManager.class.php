<?php

	class PrestationManager
	{
		protected $mysql;

		public function __construct($connexion)
		{

			$this->mysql = $connexion;
		}

		public function getPrestations(){
			// ecrire la requete sql
			$prestationsTab = [];
			$requete = "SELECT * FROM prestations";
			$resultat = $this->mysql->query($requete); 
			while($ligne = $resultat->fetch_assoc()){
				array_push($prestationsTab, $ligne);
			}
			
			return $prestationsTab;
		}

	}