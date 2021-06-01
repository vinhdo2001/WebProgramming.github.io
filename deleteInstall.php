<?php
    $filename = 'install.php';

    if (file_exists($filename)) {
        exit("Website stopped running because install.php has not been deleted yet.");
    }
?>