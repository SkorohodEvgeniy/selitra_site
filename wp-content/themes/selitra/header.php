<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php bloginfo('name')?></title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	
</head>
<body>
	<header>

		<div class="wrapper">
			<div class="block_nav">
				<?php echo get_custom_logo()?>
				
				<div class="block_contact">
					<ul class="contact">
						<li><a href="#"><?php the_field('phone', 'option'); ?></a></li>
						<li><a href="#">(067) 000-00-00</a></li>
						<li><a href="#">(063) 000-00-00</a></li>
					</ul>
					<button>Заказать звонок</button>
					<a href="#" class="go_shop">Розничный магазин</a>

					<div class="dropdown">
						<div class="dropbtn">Русский</div>
						<div class="dropdown-content">
							<a href="#">Русский</a>
							<a href="#">Український</a>
						</div>
					</div>
				</div>
			</div>

			<div class="title">
				<p class="title_sale">Скидка 5%</p>
				<p class="title_cash">При оплате наличными</p>
			</div>
			<div class="btn_catalog">
				<button class="">Перейти в каталог</button>
			</div>
		</div>
	</header>