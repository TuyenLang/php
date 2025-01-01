<?php require page('includes/header')?>

	<section>
		<img class="hero" src="https://images-platform.99static.com//PhOBKimkdiMjzZ-E4yUsDgDms5I=/589x196:1305x912/fit-in/500x500/99designs-contests-attachments/136/136791/attachment_136791925">
	</section>
	


	<section class="content">
		
		<?php 

			//$rows = db_query("select * from songs where featured = 1 order by id desc limit 16");
			$rows = db_query("select * from songs order by id desc limit 16");

		?>

		<?php if(!empty($rows)):?>
			<?php foreach($rows as $row):?>
				<?php include page('includes/song')?>
			<?php endforeach;?>
		<?php else:?>
			<div class="m-2">Không tìm thấy bài hát</div>
		<?php endif;?>

	</section>

	

<?php require page('includes/footer')?>