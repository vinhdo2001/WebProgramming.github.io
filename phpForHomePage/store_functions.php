<?php
require 'product_functions.php';

function read_all_stores() {
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

// function timecomp($a,$b){
//   return strtotime($b['created_time'])-strtotime($a['created_time']);
// }
function read_newest_stores() {
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
  uasort($stores,'timecomp');
  return $stores;

}
function read_featured_stores() {
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