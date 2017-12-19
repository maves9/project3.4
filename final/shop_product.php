<!DOCTYPE html>
<html>
<head>
<?php
require_once('php/data_classes.php');

$products = new ProductObjectData;
$products_arr = $products->get_products_array();

if ($products_arr !== null) {
//Loops through $products_arr - Jumps back and forth between HTML and PHP to post product data
	foreach ($products_arr as $product_found):

		if ($product_found->produkt_nr === (int)$_GET['id']):
			?>
	<meta charset="UTF-8">
	<title><?php echo $product_found->navn ?> - Webshop - Jagt &amp; Fiskerimagasinet Aarhus</title>
	<meta name="description" content="<?php echo $product_found->navn ?> - <?php echo ucfirst($product_found->beskrivelse) ?> Pris <?php echo $product_found->pris . '-' ?>">
    <meta name="keywords" content="jagt og fiskerimagasinet aarhus, jagt, fiskeri, outdoor, aarhus, sønder alle, 8000, fjällræven, dame, jakke, outdoor">
    <link rel="icon" type="image/png" href="img/icon/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Spectral+SC:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
	<link rel=stylesheet href="css/master.css">
</head>
<body>
<!--Include header-->
<?php include 'php/include/header.php'; ?>
<main class="wrap">
	<article class="shop__main">
<!--Include sidebar menu for webshop-->
	<?php include 'shop_explorer.php'; ?>

<!--Product category-->
		<article class="shop__products">
			<header class="products__header">
				<h2 class="products__header-title">Alle produkter</h2><!--overskrift på shopkategori skiftes -->
			</header>
<!-- Breadcrumbs and delivery-->
			<section class="products__subheader">
				<p class="products__subheader-breadcrumb">Alle produkter/</p><!-- breadcrumb skiftes -->
				<a href="fragt.html"><p class="products__subheader-fragt">Altid Gratis Fragt & Retur ved Køb Over 1000,-</p></a>
			</section>
<!-- Product information-->
			<section class="products__display"><!-- produkter skiftes -->

<!--Product image-->
				<section class="product__view">
					<figure class="view__image">
							<img src="img/produkter/<?php echo $product_found->billede ?>" alt="<?php echo $product_found->billede ?>">
					</figure>
<!--Product small description-->
					<section class="view__descrip">
						<h4><?php echo $product_found->navn ?></h4>
						<p class="product__price">Vejl pris i DKK <span><?php echo $product_found->pris . '-' ?></span></p>

						<input class="product__antal" type="number" min="0" id="antal" value="1" placeholder="1"></input>
						<a><p id="addToBasket" class="product__tobasket">Læg i kurven</p></a>

					</section>
<!--Product full description-->
					<section class="product__fulldescrip">
						<p><strong>Beskrivelse</strong></p>
						<p><?php echo ucfirst($product_found->beskrivelse) ?></p>
						<br>
						<p>For yderligere spørgsmål kontakt <?php echo $product_found->afdeling?></p>


					</section>

				</section>
	<!--Back to all products-->
					<section class="products__back-btn">
					<a href="shop_main.php">
						<div class="products__back-btn--arrow">
							<img src="img/icon/arrow-left.svg" alt="">
						</div>
						<div class="products__back-btn--descrip">Tilbage til oversigt</div>
						</a>
					</section>

				<?php

						endif;
					endforeach;

				}else {
					 header('location:404.php');
				 }

				?>


			</section>
		</article>

	</article>
<!--Placeholder for Google reviews - Opens in new tab-->
			<section class="shop__google">
	        <a href="https://www.google.dk/search?q=jagt+og+fiskerimagasinet+%C3%A5rhus&oq=jagt+og+fiskerimagasinet+%C3%A5rhus&aqs=chrome..69i57j69i60l2j0l2j69i60.1971j0j4&sourceid=chrome&ie=UTF-8#lrd=0x464c3f922336bcdd:0x17c99b612d06c421,1,,," target="_blank">
  				<img src="./img/reviews-placeholder.jpg" alt="Google Reviews" class="kontakt__img__reviews">
  			</a>
		</section>
</main>
<!--Include footer-->
<?php include 'php/include/footer.php'; ?>
<!--Include jQuery library-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include own JavaScript file-->
<script src="js/shop.js"></script>
</body>
</html>
