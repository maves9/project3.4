<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hjem - Jagt &amp; Fiskerimagasinet Aarhus</title>
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
<!--Include pop up for quiz-->
<?php include 'survey_popup.php'; ?>
<main>
<!--Include video-->
  <div id="main__video">

    <div id="main__video--iframe"></div>

    <script async src="https://www.youtube.com/iframe_api"></script>

    <article class="main__webshop">
      <section class="main__webshop--outdoor"> <h2>OUTDOOR</h2> </section>
      <section class="main__webshop--fiskeri"> <h2>FISKERI</h2> </section>
      <section class="main__webshop--jagt">    <h2>JAGT</h2>    </section>
    </article>

  </div>
<!--Events-->
  <article id="main__events">
    <section id="main__events--nak">
      <img class="main__events--img" src="img/jørgen-skoubo.png" alt="Foredrag med Jørgen Skoubo fra Nak &amp; Æd">
      <section class="main__events--content">
        <h2>NAK &amp; ÆD -<br>FOREDRAG MED JØRGEN SKOUBO</h2>
        <a href="#">Læs mere her</a>
      </section>
      <section class="main__events--date"><p>28. december</p><p>2017</p>
      </section>
    </section>

    <section id="main__events--fisketur">
      <img class="main__events--img" src="img/fisketur.png" alt="Fælles fisketur til Giber Å ved Mårslet">
      <section class="main__events--content">
        <h2>FISKETUR -<br>FÆLLES FISKETUR TIL GIBER Å</h2>
        <a href="#">Læs mere her</a>
      </section>
      <section class="main__events--date"><p>3. februar</p><p>2018</p></section>
    </section>
  </article>
<!--Social media - Facebook and Youtube-->
  <div id="main__social">
    <section id="main__social--facebook">
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FJagtOgFiskerimagasinetAarhus%3Ffref%3Dts&tabs=timeline%2C%20events%2C%20messages&width=435&height=430&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="435" height="430" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </section>

    <section id="main__social--youtube">
      <h3>Vidste du, at vi er på YouTube?</h3>
      <p>Besøg vores YouTube kanal og få tips og triks til din hobby</p>
      <iframe width="331" height="186" src="https://www.youtube.com/embed/FscVkAwN6ps" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </section>
  </div>
<!--Placeholder for Google Reviews - Opens in new tab-->
  <a href="https://www.google.dk/search?q=jagt+og+fiskerimagasinet+%C3%A5rhus&oq=jagt+og+fiskerimagasinet+%C3%A5rhus&aqs=chrome..69i57j69i60l2j0l2j69i60.1971j0j4&sourceid=chrome&ie=UTF-8#lrd=0x464c3f922336bcdd:0x17c99b612d06c421,1,,," target="_blank">
    <img src="./img/reviews-placeholder.PNG" alt="Google Reviews" class="kontakt__img__reviews"></a>
</main>
<!--Include footer-->
<?php include 'php/include/footer.php'; ?>

<script type="text/javascript" src="js/home.js"></script>
</body>
</html>
