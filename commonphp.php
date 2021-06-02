<?php
if(file_exists("install.php")){
    exit("The system detected install file. Please delete the file (install.php) manually.");
}
require "datafunction.php";
<<<<<<< HEAD
session_start();
=======

>>>>>>> 8ca1f7d97ce95ffa1797c52ddf5eccc6f0abe0a1
$mypagePath = "\"".changeMyPagePath()."\"";
?>