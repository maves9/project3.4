<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shop JFM | Product name</title>
	<link rel=stylesheet href="css/shop.css">
</head>
<body>

<main class="wrap">
	<article class="shop__main">

	<?php include 'shop_explorer.php'; ?>

		
		<article class="shop__products">
			<header class="products__header">
				<h2 class="products__header-title">Overtøj</h2><!--overskrift på shopkategori skiftes -->
			</header>

			<section class="products__subheader">
				<p class="products__subheader-breadcrumb">OUTDOOR/Beklædning/Overtøj</p><!-- breadcrumb skiftes -->
				<a href="fragt.html"><p class="products__subheader-fragt">Altid Gratis Fragt & Retur ved Køb Over 1000,-</p></a>
			</section>
			
			<section class="products__display"><!-- produkter skiftes -->
				
				<section class="product__view">
					<figure class="view__image">
						<img src="img/product.jpg" alt="Product img">
					</figure>
					<section class="view__descrip">
						<p class="product__smalldescrip">Fjällraven Dame</p>
						<h4>Kånken</h4>
						<p class="product__price">Vejl pris i DKK <span>649,-</span></p>

						<input class="product__antal" type="number" value="1" placeholder="1"></input>
						<a href=" læg i kurv "><p class="product__tobasket">Læg i kurven</p></a>

					</section>
					<section class="product__fulldescrip">
						<p><strong>Beskrivelse</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
					</section>

				</section>
				<section class="products__back-btn">
					<div class="products__back-btn--arrow">
						<img src="img/ic_play_arrow_white_24px.svg" alt="">
					</div>
					<div class="products__back-btn--descrip">Tilbage til oversigt</div>
				</section>
			</section>
		</article>
		<section class="shop__google">
			<p>google reeeeeeeeeeeeeveieieieiws</p>
		</section>
	</article>
</main>
</body>
</html>
