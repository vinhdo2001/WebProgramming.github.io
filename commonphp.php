<?php
if(file_exists("install.php")){
    exit("The system detected install file. Please delete the file (install.php) manually.");
}
require "datafunction.php";

$mypagePath = "\"".changeMyPagePath()."\"";
?>