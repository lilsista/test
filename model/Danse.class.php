<?php

class Danses
{

	// les variables
	protected $id;
	protected $nom;
	protected $image;
	protected $video;

	// les accesseur
	public function getId(){
		 $this->id;
	}

	public function setNom($newNom){
		$this->nom = $newNom;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setImage($newImg){
		$this->image = $newImg;
	}

	public function getImage(){
		return $this->image;
	}

	public function setVideo($newVideo){
		$this->video = $newVideo;
	}
    
    public function getVideo(){
    	return $this->video;
    }
}


