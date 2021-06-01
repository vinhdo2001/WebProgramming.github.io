<?php
function read_file() {
    $file = 'ToS.csv';
    $fp = fopen($file, 'r');
    $first = fgetcsv($fp);
    $products = [];
    while ($row = fgetcsv($fp)) {
        $i = 0;
        $product = [];
        foreach ($first as $col_name) {
        $product[$col_name] =  $row[$i];
        $i++;
    }
    $products[] = $product;
    }
    return $products;
}
?>