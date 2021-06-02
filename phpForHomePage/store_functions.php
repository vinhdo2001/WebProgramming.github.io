<?php
require 'product_functions.php';

function read_all_stores() {
  $file_name = '../csvfile/stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  return $stores;
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

function read_all_stores_sorted() {
  $file_name = '../csvFile/stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  sort($stores);
  return $stores;
}
=======
>>>>>>> parent of 19a905d (part 07)

=======
>>>>>>> parent of 19a905d (part 07)
=======
>>>>>>> parent of 19a905d (part 07)
=======
>>>>>>> parent of 19a905d (part 07)

// function timecomp($a,$b){
//   return strtotime($b['created_time'])-strtotime($a['created_time']);
// }
function read_newest_stores() {
  $file_name = '../csvfile/stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  uasort($stores,'timecomp');
  return $stores;

}
function read_featured_stores() {
  $file_name = '../csvfile/stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    if ($store['featured']=="TRUE"){
      $stores[] = $store;
    }
  }
  return $stores;
}


function get_store($store_id) {
  $stores = read_all_stores();
  foreach ($stores as $p) {
    if ($p['id'] == $store_id) {
      return $p;
    }
  }
  return false;
}
function sortByName($standartLetter){
  //This function receives the standard letter as parameters
  //and returns array which only matched with the standard letter.
  $storeArr = getCSVfile("../csvFile/stores.csv");
  $result = [];
  foreach($storeArr as $data){
      $checkFirstLetter = stripos($data["name"], $standartLetter);
      if($checkFirstLetter === 0){
          $result[] = $data;
      }
  }
  return $result;
}

function sortByCatagory($standardCatID){
  //This function receives the standard cateagory id as parameters
  //and returns array which only matched with the standard cateagory id.
  $storeArr = getCSVfile("../csvFile/stores.csv");
  foreach($storeArr as $data){
      if($data["category_id"] == $standardCatID){
          $result[] = $data;
      }
  }
  return $result;
}

function setSortItems(){
  //This function returns a sorted array considering user standard value.
  if(isset($_GET["submitName"])){
      $result = sortByName($_GET["store_name"]);
  }else if(isset($_GET["submitCatagory"])){
      $result = sortByCatagory($_GET["store_catagories"]);
  }
  return $result;
}