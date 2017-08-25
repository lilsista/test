<?php

	$dansesManager = new DansesManager($mysqli);
	$categorie = $dansesManager->getCategorie($_GET['cat']);