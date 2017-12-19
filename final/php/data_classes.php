<?php

class ProductObjectData {
  //exaple DATA  $product_data->produkter->jagt->våben_og_tilbehør->rifler[0]->navn
  public $data;

  public function __construct() {
    $this->data = file_get_contents(dirname(__DIR__).'/data/produkter.json');
    $this->data = json_decode($this->data);
   }

  public function get_products_array(){
    $product_data = $this->data;
    $products_arr = array();

    function getObjects($data){

    static $output = array(); //functional memory

      foreach($data as $val) {

        if (!isset($val->navn)) {

          getObjects($val, $output);
          continue;
        }
        $output[] = $val;

      }
      return $output;
    }

    $products_arr = getObjects($product_data);

    return $products_arr;
  }
 }

class AnimalObjectData {

  public $data;

  public function __construct() {
    $this->data = file_get_contents(dirname(__DIR__).'/data/fisk_og_dyr.json'); //absolute path
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
