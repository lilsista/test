
<div class="prestation">
	<div class="presentation-prestation">
		<img class="img-prestation"src="<?=ROOT_WEB.DIR_IMG?>prestation/mariage.jpg" alt="préstation mariage">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cumque, provident optio quibusdam. Blanditiis quidem, magnam eaque ratione reprehenderit soluta labore aliquam, molestias officiis pariatur in tenetur dicta! Autem, qui.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam impedit consequatur repudiandae nulla voluptatum fugiat, nostrum odio quia fugit? Magnam reiciendis molestias illum ea. Voluptatem, provident nulla fuga rem cumque.
		</p>
	</div>
	<div class="slider-prestation">
		<h1>Nos Différentes Prestations</h1>

		<?php foreach ($prestationsImage as $key => $value):?>
			<figure class="box-image">
				<img src="<?=ROOT_WEB.DIR_IMG?><?=$value['image']?>" alt="<?=$value['titre']?>">
				<figcaption>
					<h3><?=$value['titre']?></h3>
				</figcaption>
			</figure>
				
				
			
		<?php endforeach ?>
			
		<!-- <img src="<?=ROOT_WEB.DIR_IMG?>prestation/slider/creperie.jpg" alt="creperie"> 
		<img src="<?=ROOT_WEB.DIR_IMG?>prestation/slider/divers.jpg" alt="divers">
		<img src="<?=ROOT_WEB.DIR_IMG?>prestation/slider/drancy.jpg" alt="Fête de drancy">
		<img src="<?=ROOT_WEB.DIR_IMG?>prestation/slider/noel.jpg" alt="Arbre de noel">
		<img src="<?=ROOT_WEB.DIR_IMG?>prestation/slider/telethon.jpg" alt="téléthon"> -->
	</div>
</div>