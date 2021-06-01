<?php

$file_name = 'ToS.csv'; // name of csv file
$lines = file($file_name,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // read all the lines into an array

// callback function to filter csv lines using an index (the column in the csv line, starting at 0) and a min and max value
function _filter_csv(&$item, $key, $arg){
$values = array_map('trim',explode(',',$item)); // explode and trim values
if($values[$arg['index']]>=$arg['min'] && $values[$arg['index']]<=$arg['max']){ // test if the supplied index/column is between the min and max values inclusive
	return; // value in range, simply return (do nothing)
}
$item = ''; // value outside of range, clear value
}

array_walk($lines,'_filter_csv',array('index'=>2,'min'=>4,'max'=>)); // keep values in the age (index = 2) column that are between the min and max values (4 and  inclusive
$lines = array_filter($lines); // remove empty entries

echo "<pre>",print_r($lines,true); // display result for demo purposes