<?php 
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->setTitle('HOMEPAGE');
 ?>




<div id="page" class="container">
	<div class="boxA">
		<h2>Etiam posuere augue</h2>
		<div class="box">
			<a href="#" class="image image-full"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic01.jpg" alt="" /></a>
			<span>Maecenas luctus lectus</span>
		</div>
		<p>Vivamus fermentum augue. Praesent lacus urna rutrum. Nulla enim eros varius. Duis enim nulla luctus eu, dapibus lacinia.</p>
		<a href="#" class="button">Etiam posuere</a>
	</div>
	<div class="boxB">
		<h2>Donec dictum metus</h2>
		<div class="box">
			<a href="#" class="image image-full"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic02.jpg" alt="" /></a>
			<span>Lorem ipsum dolor sit amet</span>
		</div>
		<p>Vivamus fermentum augue. Praesent lacus urna rutrum. Nulla enim eros varius. Duis enim nulla luctus eu, dapibus lacinia.</p>
		<a href="#" class="button">Etiam posuere</a>
	</div>

	<div class="boxC">
		<h2>Fusce ultrices fringilla</h2>
		<div class="box">
			<a href="#" class="image image-full"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic03.jpg" alt="" /></a>
			<span>Pellentesque quis lectus</span>
		</div>
		<p>Vivamus fermentum augue. Praesent lacus urna rutrum. Nulla enim eros varius. Duis enim nulla luctus eu, dapibus lacinia.</p>
		<a href="#" class="button">Etiam posuere</a>
	</div>
</div>

<?php 
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');

 ?>