<?php

class ProductObjectData {
  //exaple DATA  $product_data->produkter->jagt->våben_og_tilbehør->rifler[0]->navn
  public $data;

  public function __construct() {
    $this->data = file_get_contents(dirname(__DIR__).'/data/produkter.json');
    $this->data = json_decode($this->data);
   }
   function getCurrentUri()
   {
       $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
       $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
       if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
       $uri = '/' . trim($uri, '/');
       return $uri;
   }

  public function get_products_array(){
    $product_data = $this->data;
    $products_arr = array();

    foreach ($product_data as $i):
      foreach ($i as $ii){//AAAAAAAAAAND
        foreach ($ii as $iii) {//iii
          foreach ($iii as $iiii) {//iiii

            if (isset($iiii->produkt_nr)){//WIL ALWAYS LOVE UUUUUUUUUUUUUUUUUUUUUUUUu
              array_push($products_arr, $iiiii);
            }

            foreach ($iiii as $iiiii) {//tilbehør

              if (isset($iiiii->produkt_nr)){
                array_push($products_arr, $iiiii);
              }

            foreach ($iiiii as $iiiiii) {//tilbehør

              if (isset($iiiiii->produkt_nr)){
                 array_push($products_arr, $iiiiii);
              }
            }
          }
        }
      }
    }
    endforeach;
    return $products_arr;
  }
 }


class AnimalObjectData {

  public $data;

  public function __construct() {
    $this->data = file_get_contents(dirname(__DIR__).'/data/fisk_og_dyr.json');
    $this->data = json_decode($this->data);
  }

  public function get_animals_array(){
    $data = $this->data;
    $animals_array = array();
    foreach($data as $arr){
      foreach($arr as $obj){

          array_push($animals_array, $obj);

    }
  }
    return $animals_array;
 }
}
