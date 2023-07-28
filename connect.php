<?php

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $uploads = "uploaded_images" .$filename;
    echo $uploads; 
    move_uploaded_file($tempname, $uploads);

    ?>
