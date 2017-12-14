<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shop JFM</title>
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

				<!--h4 class="product__brand">Fjällraven</h4-->
				<section class="product">
					<img src="img/product.jpg" alt="product image">
					<p class="product__smalldescrip">Fjällraven Dame</p>
					<h4>Kånken</h4>
					<p class="product__price">Vejl pris i DKK <span>649,-</span></p>
					<a href="shop_product.php"><p class="product__link">Mere info</p></a>
				</section>
				<section class="product">
					<img src="img/product.jpg" alt="product image">
					<p class="product__smalldescrip">Fjällraven Dame</p>
					<h4>Kånken</h4>
					<p class="product__price">Vejl pris i DKK <span>649,-</span></p>
					<a href="shop_product.php"><p class="product__link">Mere info</p></a>
				</section>
				<section class="product">
					<img src="img/product.jpg" alt="product image">
					<p class="product__smalldescrip">Fjällraven Dame</p>
					<h4>Kånken</h4>
					<p class="product__price">Vejl pris i DKK <span>649,-</span></p>
					<a href="product?name=kaanken.php"><p class="product__link">Mere info</p></a>
				</section>


				<!--h4 class="product__brand">Häglof</h4-->

				<section class="product">
					<img src="img/product.jpg" alt="product image">
					<p class="product__smalldescrip">Fjällraven Dame</p>
					<h4>Kånken</h4>
					<p class="product__price">Vejl pris i DKK <span>649,-</span></p>
					<a href="shop_product.php"><p class="product__link">Mere info</p></a>
				</section>
				
				<section class="product">
					<img src="img/product.jpg" alt="product image">
					<p class="product__smalldescrip">Fjällraven Dame</p>
					<h4>Kånken</h4>
					<p class="product__price">Vejl pris i DKK <span>649,-</span></p>
					<a href="shop_product.php"><p class="product__link">Mere info</p></a>
				</section>
				<section class="product">
					<img src="img/product.jpg" alt="product image">
					<p class="product__smalldescrip">Fjällraven Dame</p>
					<h4>Kånken</h4>
					<p class="product__price">Vejl pris i DKK <span>649,-</span></p>
					<a href="shop_product.php"><p class="product__link">Mere info</p></a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
	
	$( document ).ready(function() {
    	$('.browse__explorer').children('h3').click( function() {
    		$(this).siblings('ul').slideToggle(200);
    	});
	});



</script>
