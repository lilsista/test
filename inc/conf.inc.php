<?php
//session_start();

function loadclass($class) {
    include 'model/' . $class . '.class.php';
}

/*$dsn = 'mysql:host=localhost;dbname=ecommerce;charset=utf8';
$utilisateur = 'root';
$motDePasse = '';
$DB = new PDO($dsn, $utilisateur, $motDePasse);
*/
$server = "localhost";
	$base = "tkdans";
	$user = "root";
	$mdp = "";



	$mysqli = new mysqli($server,$user,$mdp,$base);
	$mysqli->set_charset("utf8");
	if($mysqli->connect_error){
		die("Erreur de connexion(".$mysqli->connect_errno);
	}
spl_autoload_register('loadclass');

define ('ROOT', realpath(dirname(__FILE__) . '/../') . '/');

define('ROOT_WEB', substr(ROOT, strlen($_SERVER['DOCUMENT_ROOT'])));

define ('DIR_CSS',"vue/css/");

define ('DIR_JS', "vue/js/");

define ('DIR_IMG',"vue/img/");

define ('DIR_MSQ',"vue/musique/");
