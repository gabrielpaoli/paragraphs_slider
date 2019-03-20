<div class="home-slider">
	<?php 
		$paragraphs_slider = $variables["paragraphs_slider"];
		foreach($paragraphs_slider["data"] as $key => $individual_item):
	?>
		<div class="slider-item">
			<div class="slider-item-image">
				<img src="<?= $individual_item["image"]; ?>" alt="slider-image">
			</div>
			<div class="slider-item-text">
				<h2 class="slider-item-title"><?= $individual_item["title"]; ?></h2>
				<p class="slider-item-par"><?= $individual_item["body"]; ?></p>
			</div>
		</div>
	<?php
		endforeach;
	?>	
</div>


