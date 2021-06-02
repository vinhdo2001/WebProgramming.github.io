<?php
require 'phpForHomePage/product_Functions.php';
function readAllStore() {
  //This function read all the store lines by lines
  $fileName = '../csvFile/stores.csv';
  $open = fopen($fileName, 'r');
  $first = fgetcsv($open);
  $stores = [];
  while ($row = fgetcsv($open)) {
    $i = 0;
    $store = [];
    foreach ($first as $colName) {
      $store[$colName] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  return $stores;
}

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


function read_newest_stores() {
  $file_name = '../csvFile/stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $colName) {
      $store[$colName] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  uasort($stores,'timecomp');
  return $stores;

}
function readFeaturedStores() {
  //This function read all the featured stores lines by lines
  $fileName = '../csvFile/stores.csv';
  $open = fopen($fileName, 'r');
  $first = fgetcsv($open);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $colName) {
      $store[$colName] =  $row[$i];
      $i++;
    }
    if ($store['featured']=="TRUE"){
      $stores[] = $store;
    }
  }
  return $stores;
}


function getStore($storeID) {
  //Get the a store ID for testing
  $stores = readAllStore();
  foreach ($stores as $p) {
    if ($p['id'] == $storeID) {
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