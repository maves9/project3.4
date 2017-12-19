<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Webshop - Jagt &amp; Fiskerimagasinet Aarhus</title>
	<meta name="description" content="Køb dit udstyr hurtigt og effektivt i Jagt &amp; Fiskerimagasinet Aarhus' webshop">
    <meta name="keywords" content="jagt og fiskerimagasinet aarhus, jagt, fiskeri, outdoor, aarhus, sønder alle, 8000, køb, buy, webshop, fragt">
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
<!--Include webshop sidebar menu-->
	<?php include 'shop_explorer.php'; ?>
<!--Category header-->
		<article class="shop__products">
			<header class="products__header">
				<h2 class="products__header-title">Alle produkter</h2><!--overskrift på shopkategori skiftes -->
			</header>
<!--Subheader with breadcrumbs and delievery-->
			<section class="products__subheader">
				<p class="products__subheader-breadcrumb">Alle produkter/</p><!-- breadcrumb skiftes -->
				<a href="fragt.html"><p class="products__subheader-fragt">Altid Gratis Fragt & Retur ved Køb Over 1000,-</p></a>
			</section>

<!--Display of products-->
			<section class="products__display"><!-- produkter skiftes -->

			<?php
				require_once('php/data_classes.php');

				$products = new ProductObjectData;

				$products_arr = $products->get_products_array();

				if ($products_arr !== null) {
				//Loops through products_arr - Jumps back and forth between HTML and PHP to post product data
				  foreach ($products_arr as $product_found) {
				 ?>
				<!--Product image is displayed-->
				 <section class="product">
					 <figure class="product__image-container">
					 		<img src="img/produkter/<?php echo $product_found->billede ?>" alt="<?php echo $product_found->billede ?>">
					 </figure>

				<!--Small product description is displayed-->
				   <p class="product__smalldescrip">
						 <?php echo substr(ucfirst($product_found->beskrivelse), 0, 100);
						  if(strlen($product_found->beskrivelse) > 100 ) echo '...' ?>
						</p>

				   <h4>
						 <?php echo substr(ucfirst($product_found->navn), 0, 20);
					 		if(strlen($product_found->navn) > 20 ) echo '...'; ?>
					 </h4>
				<!--Price and read more button-->
					<div id="bott">
					   <p class="product__price">Vejl pris i DKK <span><?php  echo $product_found->pris . '-'; ?></span></p>

					   <a href="shop_product.php?id=<?php echo $product_found->produkt_nr ?>"><p class="product__link">Mere info</p></a>
				   </div>
				 </section>

				<?php
				  }
				}
				?>

			</section>
		</article>

	</article>
	<!--Placeholder for Google reviews - Opens in new tab-->
			<section class="shop__google">
	        <a href="https://www.google.dk/search?q=jagt+og+fiskerimagasinet+%C3%A5rhus&oq=jagt+og+fiskerimagasinet+%C3%A5rhus&aqs=chrome..69i57j69i60l2j0l2j69i60.1971j0j4&sourceid=chrome&ie=UTF-8#lrd=0x464c3f922336bcdd:0x17c99b612d06c421,1,,," target="_blank">
  				<img src="img/reviews-placeholder.jpg" alt="Google Reviews" class="kontakt__img__reviews">
  			</a>
		</section>
</main>

<!--Include footer-->
<?php include 'php/include/footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/shop.js"></script>

</body>
</html>
