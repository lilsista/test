 <div class="fil-arriane">
	<a class="fil-arriane-item" href="?page=home">Accueil</a>
	<?php if(isset($_GET["item"])): ?>
	<?php foreach ($_GET['item'] as $key => $value):?>
		<a class="fil-arriane-item" href="?page=<?= $value?>&item[]=<?=$value?>"><?= $value?></a>
	<?php endforeach?>
	<?php endif ?>
 </div>