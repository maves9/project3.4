<?php
session_start();


$errors = isset($_SESSION["errors"]) ? $_SESSION["errors"] : [];
$fields = isset($_SESSION["fields"]) ? $_SESSION["fields"] : [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kontakt - Jagt &amp; Fiskerimagasinet Aarhus</title>
    <meta name="description" content="Skriv til os eller find kontaktinformationer og rutevejledning til Jagt og Fiskerimagasinet Aarhus her">
    <meta name="keywords" content="jagt og fiskerimagasinet aarhus, jagt, fiskeri, outdoor, aarhus, sønder alle, 8000, kontakt, adresse, telefon, mail, kontaktformular, skriv til">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/icon/favicon.png">

    <link href="css/master.css" rel="stylesheet">
</head>

<body class="kontakt__body">

<?php
include 'php/include/header.php';
  if (!empty($errors)):
?>

    <div class="kontakt__from__validation-box <?php echo $errors[0] === false ? 'kontakt__from__validation-box--success': 'kontakt__from__validation-box--alert'  ?>">
          <ul>
            <li><?php echo $errors[0] !== false ? implode('</li><li>',$errors): 'Tak for din besked vi kontakter dig tilbage hurtigst muligt'?></li>
        </ul>
        <img src="img/close_modal.svg" id="validationCloseBtn" class="kontakt__from__validation-box__close">
    </div>

<script type="text/javascript">

  const validationCloseBtn = document.getElementById('validationCloseBtn');
  validationCloseBtn.onclick = (e) => e.target.parentNode.remove();

</script>

<?php endif; ?>


    <main class="kontakt__main">
        <section class="kontakt__section">
<!--Yellow box with contact information-->
            <div class="kontakt__bgimg"></div>
            <article class="kontakt__info">
                <h2 class="kontakt__h2">Jagt &amp; Fiskerimagasinet</h2>
                <h3 class="kontakt__h3">Kontakt</h3>
                <!--'Mailto' opens mail-window with predefined subject 'Henvendelse fra hjemmeside'-->
                <a href="mailto:jagtfiskaarhus@mail.dk?Subject=Henvendelse fra hjemmeside" class="kontakt__a">jagtfiskaarhus@mail.dk</a>
                <!--'tel' call the business from mobile-->
                <a href="tel:+4586135600" class="kontakt__a">+45 86 13 56 00</a>
                <h3 class="kontakt__h3">Adresse</h3>
                <!--Opens Google maps in a new tab-->
                <a href="https://goo.gl/maps/rFGNYLTb74M2" target="_blank" class="kontakt__a">Sønder Allé 5, 8000 Aarhus C</a>
                <h3 class="kontakt__h3">Åbningstider</h3>
                <!--Table with opening hours-->
                <table class="kontakt__table">
                    <tr>
                        <th class="kontakt__th">Mandag-Torsdag</th>
                        <th class="kontakt__th">10:00-17:30</th>
                    </tr>
                    <tr>
                        <th class="kontakt__th">Fredag</th>
                        <th class="kontakt__th">10:00-18:00</th>
                    </tr>
                    <tr>
                        <th class="kontakt__th">Lørdag</th>
                        <th class="kontakt__th">10:00-14:00</th>
                    </tr>
                    <tr>
                        <th class="kontakt__th">Søndag</th>
                        <th class="kontakt__th">Lukket</th>
                    </tr>
                </table>
                <p class="kontakt__p">1. lørdag hver måned 09:00-15:00</p>
            </article>
<!--Blue box with contact formular-->
            <article class="kontakt__formular">

                <h2 class="kontakt__h2">Kontakt os for mere info</h2>

            <!--Form send with post-method-->
                <form action="php/post/send_email.php" method="post" class="kontakt__form">

                    <label for="name" class="kontakt__label kontakt__label__name">Navn*</label>
                    <input type="text" <?php echo isset($fields['name']) ? 'value="' . $fields['name'] .'"' : '' ?> name="name" id="name" class="kontakt__input" required placeholder="Indtast navn...">

                    <label for="email" class="kontakt__label kontakt__label__mail">Email*</label>
                    <input type="text" <?php echo isset($fields['email']) ? 'value="' . $fields['email'] .'"' : '' ?> name="email" id="mail" class="kontakt__input" required placeholder="Indtast email...">

                    <label for="phone" class="kontakt__label kontakt__label__phone">Telefon</label>
                    <input type="text" name="phone" id="phone" class="kontakt__input" placeholder="Indtast telefon..." <?php echo isset($fields['phone']) ? 'value="' . $fields['phone'] .'"' : '' ?>>

                    <label for="message" class="kontakt__label kontakt__label__msg">Besked*</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="kontakt__textarea" required placeholder="Indtast din besked..."><?php echo isset($fields['message']) ?  $fields['message'] : '' ?></textarea>

                    <button class="kontakt__btn" type="submit">SEND</button>
                </form>
            </article>
        </section>
<!--Google Maps-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2222.230447989781!2d10.202544715946129!3d56.15312008066228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c3f922336bcdd%3A0x17c99b612d06c421!2sJagt+og+Fiskerimagasinet!5e0!3m2!1sda!2sdk!4v1513002846407" class="kontakt__iframe" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--Google Reviews-->
        <a href="https://www.google.dk/search?q=jagt+og+fiskerimagasinet+%C3%A5rhus&oq=jagt+og+fiskerimagasinet+%C3%A5rhus&aqs=chrome..69i57j69i60l2j0l2j69i60.1971j0j4&sourceid=chrome&ie=UTF-8#lrd=0x464c3f922336bcdd:0x17c99b612d06c421,1,,," target="_blank">
          <img src="./img/reviews-placeholder.PNG" alt="Google Reviews" class="kontakt__img__reviews"></a>
    </main>


<?php include 'php/include/footer.php';

  unset($_SESSION["fields"]);
    unset($_SESSION["errors"]);
?>
</body>

</html>
