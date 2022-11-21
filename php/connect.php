<?php
    $con = mysqli_connect('localhost','root','','image-uploader');
    if(!$con){
        die(mysqli_error($con));
    }
?>