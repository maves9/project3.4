<!-- Mobil nav slide ind fra siden
https://www.w3schools.com/howto/howto_js_sidenav.asp

(.sidenav ændre left:0; til right:0;)
https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_full -->

<header>
  <section id="header__top">
    <h1 id="title"><a href="index.php">Jagt & Fiskerimagasinet</a></h1>

    <nav id="header__top--nav">
      <ul>
        <li id="nak-btn"><a href="animal-info.php">NAK ET DYR</a></li>
        <li id="basketIcon"><span class="antal">0</span><a href="varekurv.php"><img class="header__top--icon" src="img/icon/indkøbskurv.svg" alt="Indkøbskurv">Indkøbskurv</a></li>
        <li><a href="#"><img class="header__top--icon" src="img/icon/din-konto.svg" alt="Din konto">Din konto</a></li>
      </ul>
    </nav>

    <img id="mobil_menu" style="cursor:pointer" onclick="openNav()" src="img/icon/mobil-menu.svg" alt="Mobil Menu">
  </section>

  <section id="header__bottom">
    <img id="logo" src="img/logo-dark-bg.svg" alt="Jagt & Fiskerimagasinet">

    <nav id="header__bottom--nav">

      <ul>
        <?php  $side_name = basename($_SERVER['SCRIPT_NAME'])  ?>

        <li><a href="index.php" class="<?php echo $side_name === 'index.php' ? 'nav__ul__li--active' : '' ?>">Hjem</a></li>
        <li><a href="shop_main.php" class="<?php echo $side_name === 'shop_main.php' ? 'nav__ul__li--active' : '' ?>">Webshop</a></li>
        <li><a href="om.php" class="<?php echo $side_name === 'om.php' ? 'nav__ul__li--active' : '' ?>">Om os</a></li>
        <li><a href="kontakt.php" class="<?php echo $side_name === 'kontakt.php' ? 'nav__ul__li--active' : '' ?>">Kontakt</a></li>

      </ul>

    </nav>
  </section>
  <!-- mobilmenu -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Hjem</a>
  <a href="shop_main.php">Webshop</a>
  <a href="om.php">Om os</a>
  <a href="kontakt.php">Kontakt</a>
</div>
<script type="text/javascript">

</script>
</header>
