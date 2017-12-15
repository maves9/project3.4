<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shop JFM | Product name</title>
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

					foreach ($products_arr as $product_found):

						if ($product_found->produkt_nr === (int)$_GET['id']):
							?>

				<section class="product__view">
					<figure class="view__image">
							<img src="img/produkter/<?php echo $product_found->billede ?>" alt="<?php echo $product_found->billede ?>">
					</figure>
					<section class="view__descrip">
						<p class="product__smalldescrip">Fjällraven Dame</p>
						<h4><?php echo $product_found->navn ?></h4>
						<p class="product__price">Vejl pris i DKK <span><?php echo $product_found->pris . '-' ?></span></p>

						<input class="product__antal" type="number" value="1" placeholder="1"></input>
						<a href=" læg i kurv "><p class="product__tobasket">Læg i kurven</p></a>

					</section>
					<section class="product__fulldescrip">
						<p><strong>Beskrivelse</strong></p>
						<p><?php echo ucfirst($product_found->beskrivelse) ?></p>

					</section>

				</section>
				<section class="products__back-btn">
					<div class="products__back-btn--arrow">
						<img src="img/icon/arrow-left.svg" alt="">
					</div>
					<div class="products__back-btn--descrip">Tilbage til oversigt</div>
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
		<section class="shop__google">
			<p>Bliv den første til at anmelde</p>
		</section>
	</article>
</main>

<?php include 'php/include/footer.php'; ?>
</body>
</html>
