<?php
require_once('data_classes.php');

$animals = new AnimalObjectData;
$animals_arr = $animals->get_animals_array();

foreach($animals_arr as $x):
  if($x->navn === $_GET['animal']):
?>

  <article class="main__animal-list__description__article">
    <h3><?php echo ucfirst($x->navn) ?></h3>
    <p><?php echo ucfirst($x->beskrivelse) ?></p>
    <img src="img/dyr/<?php echo $x->billede ?>" alt="<?php echo $x->billede ?>">
  </article>

<?php
  endif;
endforeach;
?>
