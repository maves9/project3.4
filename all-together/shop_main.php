<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shop JFM</title>
	<link rel=stylesheet href="css/master.css">
</head>
<body>
	<?php include 'php/include/header.php'; ?>

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

			<?php
				require_once('php/data_classes.php');

				$products = new ProductObjectData;

				$products_arr = $products->get_products_array();

				if ($products_arr !== null) {

				  foreach ($products_arr as $product_found) {
				 ?>

				 <section class="product">
					 <figure class="product__image-container">
					 		<img src="img/produkter/<?php echo $product_found->billede ?>" alt="<?php echo $product_found->billede ?>">
					 </figure>


				   <p class="product__smalldescrip">
						 <?php echo substr(ucfirst($product_found->beskrivelse), 0, 100);
						  if(strlen($product_found->beskrivelse) > 100 ) echo '...' ?>
						</p>

				   <h4>
						 <?php echo substr(ucfirst($product_found->navn), 0, 20);
					 		if(strlen($product_found->navn) > 20 ) echo '...'; ?>
				 	</h4>

				   <p class="product__price">Vejl pris i DKK <span><?php  echo $product_found->pris . '-'; ?></span></p>

				   <a href="shop_product.php?id=<?php echo $product_found->produkt_nr ?>"><p class="product__link">Mere info</p></a>
				 </section>

				<?php
				  }
				}
				?>

			</section>
		</article>
		<section class="shop__google">
			<p>Bliv den første til at anmelde</p>
		</section>
	</article>
</main>


	<?php include 'php/include/footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>

		$( document ).ready(function() {
	    	$('.browse__explorer').children('h3').click( function() {
	    		$(this).siblings('ul').slideToggle(200);
	    	});
		});



	</script>

</body>
</html>
