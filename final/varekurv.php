<head>
  <meta charset="utf-8">
  <title>Webshop - Jagt &amp; Fiskerimagasinet Aarhus</title>
    <meta name="description" content="Jagt og Fiskermagasinet er beliggende i Aarhus centrum. Vi har flere års erfaring og en stor personlig passion for alt inden for jagt, fiskeri og outdoor.">
    <meta name="keywords" content="jagt og fiskerimagasinet aarhus, jagt, fiskeri, outdoor, aarhus, sønder alle, 8000, facebook, youtube, århus, jagtudstyr, fiskestang, telt, fiskegrej, overtøj">
    <link rel="icon" type="image/png" href="img/icon/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/master.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Spectral+SC:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
</head>
<body>
<!--Include header-->
<?php include 'php/include/header.php'; ?>
<main class="varekurv__main ">

  <h2 class="products__header-title">Indkøbskurv</h2>

      <?php
        require_once('php/data_classes.php');

        $products = new ProductObjectData;

        $products_arr = $products->get_products_array();

        if ($products_arr !== null) {
          $i = 0;
          //Loops through products_arr - Jumps back and forth between HTML and PHP to post product data
          foreach ($products_arr as $product_found) {

         ?>

         <section class="varekurv__varer">


           <h3>
             <?php echo substr(ucfirst($product_found->navn), 0, 100);
              if(strlen($product_found->navn) > 100 ) echo '...'; ?>
           </h3>
           <div class="varekurv__x" title="Fjern vare fra kurv">X</div>

             <!--Product image is displayed-->
          <figure class="">
            <a href="shop_product.php?id=<?php echo $product_found->produkt_nr ?>">
              <img src="img/produkter/<?php echo $product_found->billede ?>" alt="<?php echo $product_found->billede ?>">
            </a>
          </figure>

        <!--Price and read more button-->
          <div id="">
             <p class="product__price">Pris i DKK <span><?php  echo $product_found->pris . '-'; ?></span></p>

           </div>
         </section>

        <?php
        if (++$i == 2) break;
          }
        }
        ?>

    <section class="varekurv__check-ud">
      <a href=""><button>Til kassen</button></a>
    </section>
</main>
<!--Include footer-->
<?php include 'php/include/footer.php'; ?>

<script type="text/javascript" src="js/home.js"></script>
</body>
</html>
