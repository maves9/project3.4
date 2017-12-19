<?php
require_once('data_classes.php');

$animals = new AnimalObjectData;
$animals_arr = $animals->get_animals_array();




foreach($animals_arr as $x):
  if($x->navn === $_GET['animal']):
?>

  <article class="main__animal-list__description__article">
    <h3><?php echo ucfirst($x->navn) ?></h3>



 
    <p class="animal__beskrivelse"><?php echo ucfirst($x->beskrivelse) ?></p>
    <h3>Hvor befinder dyret sig?</h3>
    <p><?php echo ucfirst($x->lokation) ?></p>
    <section id="lystfiskerkort">
	    <p>
	    <?php      
	    $dd = $x->type;
	    if ($dd == 'fisk') {   	?>

	    	Er du lystfisker? Se vores kort over gode lystfiskerområder nær Århus <a target="_blank" href="https://www.google.com/maps/d/u/0/viewer?mid=122P7xSAbwjdB6719rkV56QMmOZk&ll=56.16999013104315%2C10.393345355987549&z=11">her.</a>
	    	<p>Du kan også dele dine favoritsteder.</p>

	    	<?php  } else {};  ?>
	    </p>
	</section>
    <div id="animal-img-wrap">
    	<img src="img/dyr/<?php echo $x->billede ?>" alt="<?php echo $x->billede ?>">
    </div>



  </article>

<?php
  endif;
endforeach;
?>
