<?php
require_once('data_classes.php');

class GetAnimalsRelation extends AnimalObjectData {

  public function products_for_animal_array($animalName){
    $data = $this->data;

    foreach($data as $i){
      foreach ($i as $ii) {
          if ($ii->navn === $animalName) {

            return $ii->anbefalede_produkter;

          }
      }
    }

  }

}

function find_relation($products_arr, $product_numbers_arr){
  $related = array();
  foreach ($products_arr as $i) {
    if(!empty($i->produkt_nr)){
      if (compare_to_array($i->produkt_nr, $product_numbers_arr)) {
        array_push($related, $i);
        }
      }
    }
  return $related;
}

function compare_to_array($num, $arr){
  foreach ($arr as $x) {
    if ($x === $num) {
      return true;
    }
  }
}

$animals = new GetAnimalsRelation;
$animal_products_arr = $animals->products_for_animal_array( $_GET['animal'] );

$products = new ProductObjectData;
$products_arr = $products->get_products_array();

$products_found = find_relation($products_arr, $animal_products_arr);

if ($products_found !== null) {
  foreach ($products_found as $product_found) {
?>

<article class="animal-info__relevent-product">
  <a href="shop_product.php?id=<?php echo $product_found->produkt_nr ?>">

    <h3><?php echo ucfirst($product_found->navn) ?></h3>

    <img class="animal-info__relevent-product__image" src="img/produkter/<?php echo $product_found->billede ?>" alt="<?php echo $product_found->billede ?>">

  </a>
</article>

<?php  }
    }else{
?>

<article class="animal-info__relevent-product">
  <h3>Ingen produkter fundet</h3>
</article>

<?php } ?>
