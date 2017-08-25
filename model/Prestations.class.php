<?php

class Prestations
{
	protected $id;
	protected $image;
	protected $titre;

	// accesseur

	public function getId(){
		return $this->id;
	}

	public function getImage(){
		return $this->images;
	}

	public function setImage($newImage){
		$this->image = $newImage;
	}

	public function getTitre(){
		return $this->titre;
	}

	public function setTitre($newTitre){
		$this->titre = $newTitre;
	}
}
