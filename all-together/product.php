<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shop JFM | Product name</title>
	<link rel=stylesheet href="css/master.css">
</head>
<body>
	<?php include 'php/include/header.php'; ?>

<article class="wrap">
	<main class="shop__main">
		<section class="shop__browse">
			<header class="browse__header">
				<h2>Kategorier</h2>
			</header>
			<section class="browse__explorer"> <!-- disse kategorier kommer fra databasen? -->
				<h3>Outdoor</h3>
				<ul>
				    <li>Beklædning
				    	<ul class="browse__explorer-extended">
				    	    <li>Fleece</li>
				    	    <li>Overtøj</li>
				    	    <li>Regntøj</li>
				    	</ul>
				    </li>
				    <li>Fodtøj</li>
				    <li>Rygsækker</li>
				    <li>Soveposer</li>
				    <li>Tilbehør</li>
				</ul>
			</section>
			<section class="browse__explorer">
				<h3>fiskerigrej</h3>
				<ul>
				    <li>Fiskestænger</li>
				    <li>Fiskehjul</li>
				    <li>Fluefiskeri</li>
				    <li>Waders</li>
				    <li>Tilbehør</li>
				</ul>
			</section>
			<section class="browse__explorer">
				<h3>jagtudstyr</h3>
				<ul>
				    <li>Jagttøj</li>
				    <li>Luftvåben</li>
				    <li>Ammunition</li>
				    <li>Knive</li>
				    <li>Tilbehør</li>
				</ul>
			</section>
			<section class="browse__sort"> <!-- disse kategorier kommer fra databasen? -->
				<select placeholder="Mærke" class="sort__label">
					<option class="sort__label-placeholder" value="" style="display: none;" selected>Vælg mærke</option>
					<option>Fjaaaalrøv</option>
					<option>haglof</option>
				</select>
				<select class="sort__various">
					<option class="sort__label-placeholder" value="" style="display: none;" selected>Sorter efter</option>
					<option>Farve</option>
					<option>Størrelse</option>
					<option>Type</option>
				</select>
				<h4>Pris</h4>
				<input type="checkbox" class="sort__price" name="prissortering">0-999kr.</input>
				<input type="checkbox" class="sort__price" name="prissortering">1.000-1.999kr.</input>
				<input type="checkbox" class="sort__price" name="prissortering">2.000-5.000kr.</input>
				<input type="checkbox" class="sort__price" name="prissortering">Større end 5.000kr.</input>
			</section>
		</section>
		<article class="shop__products">
			<header class="products__header">
				<h2 class="products__header-title">Overtøj</h2><!--overskrift på shopkategori skiftes -->
			</header>

			<section class="products__subheader">
				<p class="products__subheader-breadcrumb">OUTDOOR/Beklædning/Overtøj</p><!-- breadcrumb skiftes -->
				<a href="fragt.html"><p class="products__subheader-fragt">Altid Gratis Fragt & Retur ved Køb Over 1000,-</p></a>
			</section>




<?php
require_once('php/data_classes.php');

$products = new ProductObjectData;
$products_arr = $products->get_products_array();

if ($products_arr !== null) {

	foreach ($products_arr as $product_found):

		if ($product_found->produkt_nr === (int)$_GET['id']):
			?>

			<section class="products__display"><!-- produkter skiftes -->

				<section class="product__view">
					<figure class="view__image">
						<img src="img/produkter/<?php echo $product_found->billede ?>" alt="<?php echo $product_found->billede ?>">
					</figure>

					<section class="product__fulldescrip">
						<p>Beskrivelse</p>
						<p><?php echo ucfirst($product_found->beskrivelse) ?></p>

					</section>
					
					<section class="view__descrip">

						<h4><?php echo $product_found->navn ?></h4>



						<p class="product__price">Vejl pris i DKK <span><?php echo $product_found->pris . '-' ?></span></p>

						<input class="product__antal" type="number" value="1" placeholder="1"></input>
						<a href=" læg i kurv "><p class="product__tobasket">Læg i kurven</p></a>

					</section>


				</section>

			</section>
		</article>


<?php

		endif;
	endforeach;

}else {
	 header('location:404.php');
 }

?>


		<section class="shop__google">
			<p>google reeeeeeeeeeeeeveieieieiws</p>
		</section>
	</main>

</article>


<?php include 'php/include/footer.php'; ?>



</body>
</html>
