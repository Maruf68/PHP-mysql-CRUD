<?php

$con=  mysqli_connect("localhost","root","","crud");

if(!$con){
   
    // echo 'connection sucessfull';

    die(mysqli_error($con));

}

?>