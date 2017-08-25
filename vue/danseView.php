		
<div class="danse-bg">
	<?php foreach ($categorieDanses as $key => $value):?>
		<a class="section-danse-category" href="?page=catdanse&cat=<?=$value['categorie']?>&item[]=danse&item[]=<?=$value['categorie']?>" ><?= $value['nom']?></a>
	<?php endforeach;?>
</div>


	