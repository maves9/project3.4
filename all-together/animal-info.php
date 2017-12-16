<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nak et dyr - Jagt &amp; Fiskermagasinet Aarhus</title>
    <meta name="description" content="Læs detaljerede beskrivelser af jagtbare dyr, se en oversigt over de bedste steder steder og hvilket udstyr Jagt &amp; Fiskerimagasinet anbefaler.">
    <meta name="keywords" content="jagt og fiskerimagasinet aarhus, jagt, fiskeri, outdoor, aarhus, sønder alle, 8000, nak et dyr, søer, områder, udstyr, bedste fiskestang, bedste jagtudstyr, anbefaling">
    <link rel="icon" type="image/png" href="img/icon/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/master.css" type="text/css" rel="stylesheet">
  </head>
  <body class="animal-info__body">





    <figure class="animal-info__top">
      <a href="index.php"><img src="img/logo-dark-bg.svg" alt="Jagt & Fiskerimagasinet"></a>
      <button onclick="goBack()">Tilbage til siden</button>
    </figure>

   

   <h1 id="animalInfor-headline">Nak et dyr <span>I samarbejde med <a href="index.php">Jagt & Fiskerimagsinet</a></span></h1>


    <main class="animal-info__main main__animation--fade-in">
<!--Back to the main site for Jagt &amp; Fiskerimagasinet Aarhus-->
      <a id="animal-info__backBtn" href="index.php">Gå tilbage</a>
<!--List of animals-->
      <ul class="dragscroll main__animal-list" id="animalList"></ul>
<!--Animal all content container-->
      <section class="animal-info__content__container" >
<!--Animal description container-->
        <section  class="main__animal-list__description" id="description">
<!--Welcome section that will only be visible once-->
          <article class="animal-list__welcome__section">
            <h2>Velkommen til Nak et dyr</h2>
            <p>Nak et dyr er til for at hjælpe dig med at finde information om dyr og fisk rundt om i Danmark, og inspirere din næste tur i det fri</p>
          </article>

        </section>
<!--Animal product container-->
        <aside class="main__animal-list__product-section" id="productAside"></aside>

      </section>

    </main>

    <script type="text/javascript" src="js/dragscroll.js"></script>
    <script type="text/javascript" src="js/animal-info.js"></script>

  </body>
</html>
